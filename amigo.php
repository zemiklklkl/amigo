<script>
    window.onload = function() {
        let parentDiv = document.querySelectorAll('.result-amigo_page');
        parentDiv.forEach(function(elem) {
            let elemTirage = elem.querySelector('.result-amigo_content');
            let ttirage = elemTirage.querySelectorAll('.result-amigo_item');
            ttirage.forEach(function(tirage) {
                var noTirage = tirage.querySelectorAll('.result-amigo_item .result-amigo_item-draw');
                var lstTirage = tirage.querySelectorAll('.numbers-item');
                if (lstTirage !== null) {
                    // console.log(noTirage);
                    lstTirage.forEach(function(blueTirag) {
                        console.log(blueTirag.textContent);
                    });
                    console.log(lstTirage);
                }
            });
        // .result-amigo_content > .result-amigo_item-draw
            // numTirage.textContent
            // console.log(numTirage);
        });
        console.log(parentDiv.length);
    };
</script>
<div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
    <div class="result-amigo_page swiper-slide swiper-slide-active" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">250</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">249</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">248</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">247</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">246</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">245</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">244</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">243</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">242</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">241</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">240</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">239</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">238</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">237</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">236</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide swiper-slide-next" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">235</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">234</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">233</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">232</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">231</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">230</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">229</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">228</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">227</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">226</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">225</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">224</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">223</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">222</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">221</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">220</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">219</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">218</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">217</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">216</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">215</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">214</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">213</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">212</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">211</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">210</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">209</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">208</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">207</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">206</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">205</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">204</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">203</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">202</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">201</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">200</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">199</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">198</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">197</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">196</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">195</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">194</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">193</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">192</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">191</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">190</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">189</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">188</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">187</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">186</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">185</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">184</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">183</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">182</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">181</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">180</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">179</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">178</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">177</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">176</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">175</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">174</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">173</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">172</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">171</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">170</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">169</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">168</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">167</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">166</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">165</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">164</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">163</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">162</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">161</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">160</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">159</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">158</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">157</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">156</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">155</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">154</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">153</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">152</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">151</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">150</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">149</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">148</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">147</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">146</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">145</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">144</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">143</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">142</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">141</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">140</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">139</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">138</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">137</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">136</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">135</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">134</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">133</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">132</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">131</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">130</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">129</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">128</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">127</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">126</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">125</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">124</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">123</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">122</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">121</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">120</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">119</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">118</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">117</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">116</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">115</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">114</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">113</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">112</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">111</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">110</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">109</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">108</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">107</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">106</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">105</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">104</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">103</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">102</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">101</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">100</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">99</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">98</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">97</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">96</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">95</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">94</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">93</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">92</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">91</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">90</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">89</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">88</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">87</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">86</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">85</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">84</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">83</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">82</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">81</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">80</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">79</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">78</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">77</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">76</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">75</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">74</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">73</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">72</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">71</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">70</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">69</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">68</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">67</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">66</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">65</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">64</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">63</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">62</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">61</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">60</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">59</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">58</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">57</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">56</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">55</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">54</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">53</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">52</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">51</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">50</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">49</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">48</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">47</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">46</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">45</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">44</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">43</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">42</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">41</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">40</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">39</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">38</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">37</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">36</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">35</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">34</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">33</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">32</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">31</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">30</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">29</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">28</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">27</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">26</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">25</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">24</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">23</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">22</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">21</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">20</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">19</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">18</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">17</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">16</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">15</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">14</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">13</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">12</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">11</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
    <div class="result-amigo_page swiper-slide" style="width: 663px;">
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">10</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">21</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">9</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">8</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">7</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">28</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">6</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">5</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">2</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">4</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">11</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item"><span class="numbers-item_num">21</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">3</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">7</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">12</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">17</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">18</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">24</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">2</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">3</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">6</span></div>
                <div class="numbers-item"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item"><span class="numbers-item_num">20</span></div>
                <div class="numbers-item"><span class="numbers-item_num">22</span></div>
                <div class="numbers-item"><span class="numbers-item_num">23</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">8</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">9</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
        <div class="result-amigo_content">
            <div class="result-amigo_item result-amigo_item-draw">1</div>
            <div class="result-amigo_item">
                <div class="numbers-item"><span class="numbers-item_num">4</span></div>
                <div class="numbers-item"><span class="numbers-item_num">5</span></div>
                <div class="numbers-item"><span class="numbers-item_num">10</span></div>
                <div class="numbers-item"><span class="numbers-item_num">14</span></div>
                <div class="numbers-item"><span class="numbers-item_num">15</span></div>
                <div class="numbers-item"><span class="numbers-item_num">25</span></div>
                <div class="numbers-item"><span class="numbers-item_num">26</span></div>
            </div>
            <div class="result-amigo_item">
                <div class="numbers-item bonus"><span class="numbers-item_num">1</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">13</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">16</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">19</span></div>
                <div class="numbers-item bonus"><span class="numbers-item_num">27</span></div>
            </div>
            <div class="result-amigo_item"></div>
        </div>
    </div>
</div>
<?php
die;
?>
