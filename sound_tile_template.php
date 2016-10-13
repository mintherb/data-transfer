<?php
    $template = '<div id="%ID%" class="audio-btn">
                    <div class="pause-overlay"><img src="%IMAGE%"></div>
                    <div class="btn-content blur">
                        <a class="pause-btn">&times;</a>
                        <img class="icon" src="%IMAGE%">
                        <div class="title">%TITLE%</div>
                        <audio id="%ID%-audio" preload="none" loop>
                           <source src="%SOURCE%" type="audio/mpeg">
                       </audio>
                        <div class="controls">
                            <div id="%ID%-slider" class="noUi-extended"></div>
                        </div>
                        <div class="author">By <a href="authors.php#%AUTHOR%" >%AUTHOR%</a></div>
                        <script>
                            var slider = document.getElementById("%ID%-slider");
                            noUiSlider.create(slider, {
                                start: 0.5,
                                connect: [true, false],
                                range: {
                                    min: 0,
                                    max: 1
                                },
                            });
                        </script>
                    </div>
                </div>';