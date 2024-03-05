<!-- nav -->
<script type="text/javascript">

    var archive_button = document.querySelector('.archive_button');
    var program_button = document.querySelector('.program_button');
    var about_button = document.querySelector('.about_button');

    var archive = document.querySelector('.shows');
    var program = document.querySelector('.program');
    var about = document.querySelector('.about');
    
    archive_button.addEventListener('click', e => {
        archive.classList.remove('close');
        program.classList.add('close');
        about.classList.add('close');

        archive_button.classList.add('marked');
        program_button.classList.remove('marked');
        about_button.classList.remove('marked');
    })

    program_button.addEventListener('click', e => {
        archive.classList.add('close');
        program.classList.remove('close');
        about.classList.add('close');

        archive_button.classList.remove('marked');
        program_button.classList.add('marked');
        about_button.classList.remove('marked');
    })

    about_button.addEventListener('click', e => {
        archive.classList.add('close');
        program.classList.add('close');
        about.classList.remove('close');

        archive_button.classList.remove('marked');
        program_button.classList.remove('marked');
        about_button.classList.add('marked');
    })
</script>

<!-- soundcloud -->
<script src="//w.soundcloud.com/player/api.js" type="text/javascript"></script>

<!-- live stream + soundcloud -->
<script language="javascript" type="text/javascript" src="https://cast1.asurahosting.com:2199/system/streaminfo.js"></script>
<script type="text/javascript">
    // soundcloud
    var iframeElement = document.querySelector('.SC_player');
    var SC_player = SC.Widget(iframeElement);
    
    var shows = document.querySelectorAll('.show');
    
    var options = [];
    options.show_artwork = true;
    options.liking = false;
    options.auto_play = true;

    function buttonClicked(self) {
        var url = self.getAttribute("data-variable") + "&show_teaser=false&auto_play=true&color=%23ff48b0";
        iframeElement.style.display = "block";
        SC_player.load(url, options);
    }

    SC_player.bind(SC.Widget.Events.FINISH, 
    function finishedPlaying() { 
            var url = "https://soundcloud.com/radio-mehoga/"
            SC_player.load(url, options);
        }
    );

    // live stream
    class EventEmitter {
        constructor(){
            this._listeners = {};
        }
        
        on(eventName, callback){
            if(eventName in this._listeners){
                this._listeners[eventName].push(callback);
            } else {
                this._listeners[eventName] = [callback];
            }
        }
        
        emit(eventName, data){
            if(eventName in this._listeners){
                this._listeners[eventName].forEach(callback => callback(data));
            }
        }
    }
    class RadioService extends EventEmitter {
        constructor(stationInfoUrl){
            super();
            this._streamURL = null;
            this._rawmeta = null;
            this._stationInfoUrl = stationInfoUrl;
            this.fetchInfo();
            this._timer = setInterval(e => this.fetchInfo(), 60 * 1000)
        }
        
        async fetchInfo(){
            const response = await fetch(this._stationInfoUrl);
            const { data } = await response.json();
            const info = data[0];
            let streamURL = info.proxytuneinurl.replace('http://', 'https://');
            if(streamURL != this._streamURL){
                this._streamURL = streamURL;
                this.emit('stream', {src: this._streamURL});
            }
            if(info.rawmeta != this._rawmeta){
                this._rawmeta = info.rawmeta;
                this.emit('meta', {meta: {name: this._rawmeta}});
            }
            this.emit('listeners', {listeners: info.listeners})
        }
    }

    async function postRequest(url, data){
        data = data || {};
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        return response.json();
    }
    
    class ShowsService {
        constructor(showName){
            this._showName = showName
        }
        
        fetch(){
            return postRequest('/api/items/all')
            .then(data => {
                return data.reverse();
            })
        }
    }

    async function initArchive(){
        const service = new ShowsService();
        const items = await service.fetch();
        console.log(items)
        function initPlayer(el){
            const audioPlayer = el.querySelector('audio');
            
            el.querySelector('.btn-play').addEventListener('click', e => {
                audioPlayer.play();
            })
            
            el.querySelector('.btn-pause').addEventListener('click', e => {
                audioPlayer.pause();
            })
            
            audioPlayer.addEventListener('play', () => {
                el.classList.add('playing');
            })
            
            audioPlayer.addEventListener('pause', () => {
                el.classList.remove('playing');
            })
            
            audioPlayer.addEventListener('timeupdate', () => {
                const p = Math.floor(audioPlayer.currentTime / audioPlayer.duration * 100);
                el.querySelector('.progress .line').style.width = `${p}%`;
            })
            
            el.querySelector('.progress').addEventListener('click', e => {
                const p = e.offsetX / el.querySelector('.progress').clientWidth;
                audioPlayer.currentTime = p * audioPlayer.duration;
                audioPlayer.play();
            })
        }
        
        document.querySelectorAll('.player').forEach(initPlayer)
    }
    
    async function initApp(){
        let src;
        
        const radioService = new RadioService('/api/radio/info');
        const audioPlayer = document.querySelector('audio');
        var isPlaying = false;
        
        radioService.on('stream', e => {
            src = e.src;
            audioPlayer.src = e.src;
        })
        
        const btn_play_live = document.querySelectorAll(".btn-play-live");
        const btn_pause = document.querySelectorAll(".btn-pause");

        for (let i = 0; i < btn_play_live.length; i++) {
            btn_play_live[i].addEventListener('click', e => {
                audioPlayer.play();
            })
        }

        for (let i = 0; i < btn_pause.length; i++) {
            btn_pause[i].addEventListener('click', e => {
                audioPlayer.pause();
            })
        }
        
        window.play = function(src, name, show){
            audioPlayer.play();
        }

        audioPlayer.onplaying = function() {
            isPlaying = true;
        };
        audioPlayer.onpause = function() {
            isPlaying = false;
        };

        // toggle live play click  
        document.querySelector('.play-live').addEventListener('click', e => {
            isPlaying ? audioPlayer.pause() : audioPlayer.play();
        })

        // SC play  
        SC_player.bind(SC.Widget.Events.PLAY, function() {
            audioPlayer.pause();
            document.querySelector('.play-live').classList.remove('playing');
        });
        
        // class-play update
        audioPlayer.addEventListener('play', () => {
            document.querySelector('.play-live').classList.add('playing');
            SC_player.pause();
        })
        
        // class-pause update
        audioPlayer.addEventListener('pause', () => {
            document.querySelector('.play-live').classList.remove('playing');
        })
        
        initArchive();
    }
    
    document.addEventListener('DOMContentLoaded', initApp)
</script>
