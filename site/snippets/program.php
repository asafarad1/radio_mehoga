<div class="program close">
            <div class="day_container">
                <div class="date_container">
                    <div class="day">
                        <p>יום א׳</p>
                    </div>
                    <div class="date">
                        <p><?php
                                $source = $page->d1();
                                $date = new DateTime($source);
                                echo $date->format('d.m.Y');
                            ?>
                        </p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>16:00—18:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d1s1_first_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d1s1_first_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>18:00—20:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d1s2_second_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d1s2_second_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>20:00—22:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d1s3_third_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d1s3_third_show_description() ?></p>
                    </div>
                </div>
            </div>
            <div class="day_container">
                <div class="date_container">
                    <div class="day">
                        <p>יום ב׳</p>
                    </div>
                    <div class="date">
                        <p><?php
                                $source = $page->d2();
                                $date = new DateTime($source);
                                echo $date->format('d.m.Y');
                            ?>
                        </p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>16:00—18:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d2s1_first_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d2s1_first_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>18:00—20:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d2s2_second_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d2s2_second_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>20:00—22:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d2s3_third_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d2s3_third_show_description() ?></p>
                    </div>
                </div>
            </div>
            <div class="day_container">
                <div class="date_container">
                    <div class="day">
                        <p>יום ג׳</p>
                    </div>
                    <div class="date">
                        <p><?php
                                $source = $page->d3();
                                $date = new DateTime($source);
                                echo $date->format('d.m.Y');
                            ?>
                        </p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>16:00—18:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d3s1_first_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d3s1_first_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>18:00—20:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d3s2_second_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d3s2_second_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>20:00—22:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d3s3_third_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d3s3_third_show_description() ?></p>
                    </div>
                </div>
            </div>
            <div class="day_container">
                <div class="date_container">
                    <div class="day">
                        <p>יום ד׳</p>
                    </div>
                    <div class="date">
                        <p><?php
                                $source = $page->d4();
                                $date = new DateTime($source);
                                echo $date->format('d.m.Y');
                            ?>
                        </p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>16:00—18:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d4s1_first_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d4s1_first_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>18:00—20:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d4s2_second_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d4s2_second_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>20:00—22:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d4s3_third_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d4s3_third_show_description() ?></p>
                    </div>
                </div>
            </div>
            <div class="day_container">
                <div class="date_container">
                    <div class="day">
                        <p>יום ה׳</p>
                    </div>
                    <div class="date">
                        <p><?php
                                $source = $page->d5();
                                $date = new DateTime($source);
                                echo $date->format('d.m.Y');
                            ?>
                        </p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>16:00—18:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d5s1_first_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d5s1_first_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>18:00—20:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d5s2_second_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d5s2_second_show_description() ?></p>
                    </div>
                </div>
                <div class="program_show">
                    <div class="hour">
                        <p>20:00—22:00</p>
                    </div>
                    <div class="program_show_title">
                        <p class="highlight"><?= $page->d5s3_third_show_title() ?></p>
                    </div>
                    <div class="program_show_description">
                        <p><?= $page->d5s3_third_show_description() ?></p>
                    </div>
                </div>
            </div>
    </div>