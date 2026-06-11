<!-- 로딩 (약 5초) -->
<!-- <div class="loader">
  <div class="loader__box">
    <div class="loader__title">투어 in 서울</div>
    <div class="loader__bar"></div>
    <div class="loader__cap">SEOUL CUSTOM TOUR</div>
  </div>
</div> -->

<?php
$category = $_GET["category"] ?? null;
if ($category) {
  $tours = db::fetchAll("select * from tours where category = $category order by start_date asc");
} else {
  $tours = db::fetchAll("select * from tours order by start_date asc");
}
?>

<!-- 비주얼 -->
<section class="visual">
  <input type="radio" name="vis" id="vis1" class="visual__r" checked>
  <input type="radio" name="vis" id="vis2" class="visual__r">
  <input type="radio" name="vis" id="vis3" class="visual__r">
  <input type="checkbox" id="vis-auto" class="visual__r">

  <div class="visual__slides">
    <div class="vis-slide">
      <img src="../제공파일/B_Module/images/image (1).jpg" alt="서울 야경" title="서울 야경">
      <div class="vis-cap"><span>당신만을 위한, 나만의 서울 여행</span></div>
    </div>
    <div class="vis-slide">
      <img src="../제공파일/B_Module/images/image (3).jpg" alt="서울 거리" title="서울 거리">
      <div class="vis-cap"><span>숨은 서울 찾기, 맞춤형 힐링 여행</span></div>
    </div>
    <div class="vis-slide">
      <img src="../제공파일/B_Module/images/image (4).jpg" alt="서울 도심" title="서울 도심">
      <div class="vis-cap"><span>취향대로 떠나는 서울 맞춤 투어</span></div>
    </div>
  </div>

  <div class="vis-ui">
    <div class="vis-arrows">
      <label for="vis3" class="vis-arrow a1" aria-label="이전">‹</label>
      <label for="vis1" class="vis-arrow a2" aria-label="이전">‹</label>
      <label for="vis2" class="vis-arrow a3" aria-label="이전">‹</label>
    </div>
    <div class="vis-dots">
      <label for="vis1" aria-label="1"></label>
      <label for="vis2" aria-label="2"></label>
      <label for="vis3" aria-label="3"></label>
    </div>
    <div class="vis-arrows">
      <label for="vis2" class="vis-arrow a1" aria-label="다음">›</label>
      <label for="vis3" class="vis-arrow a2" aria-label="다음">›</label>
      <label for="vis1" class="vis-arrow a3" aria-label="다음">›</label>
    </div>
    <label for="vis-auto" class="vis-toggle">
      <span class="lbl-manual">자동재생</span>
      <span class="lbl-auto">수동전환</span>
    </label>
  </div>
</section>

<!-- 투어 소식 -->
<section class="section">
  <div class="wrap">
    <h2 class="section-title">투어 소식</h2>
    <div class="news-grid">
      <div class="news-card">
        <h3>축제소식</h3>
        <ul class="news-list">
          <li><a href="#"><span class="cat">[축제]</span> 2026 한강 봄꽃 축제 및 여의도 벚꽃 트래킹 안내</a></li>
          <li><a href="#"><span class="cat">[여행]</span> 해치 아트벌룬 광화문 전시 및 도보 투어 가이드</a></li>
          <li><a href="#"><span class="cat">[공연]</span> 정동야행, 덕수궁 돌담길 달빛 음악회</a></li>
          <li><a href="#"><span class="cat">[문화]</span> 남산골 한옥마을 전통체험 10% 할인권 증정</a></li>
          <li><a href="#"><span class="cat">[여행]</span> 서울 스테이 라운지 이용가이드 및 쉼터 안내</a></li>
          <li><a href="#"><span class="cat">[축제]</span> 서울 장미축제, 장충체육공원 버스킹 일정</a></li>
        </ul>
        <div class="news-card__foot"><a href="#" class="more">더보기</a></div>
      </div>
      <div class="news-card">
        <h3>행사일정</h3>
        <div class="news-fig">
          <img src="../제공파일/B_Module/투어소식/행사일정.jpg" alt="행사일정" title="행사일정">
          <div class="news-fig__txt">
            <p>서울맞춤투어의 주요일정을 안내해 드립니다.</p>
          </div>
        </div>
        <div class="news-card__foot"><a href="#" class="more">더보기</a></div>
      </div>
      <div class="news-card">
        <h3>프로그램</h3>
        <div class="news-fig">
          <img src="../제공파일/B_Module/투어소식/프로그램.jpg" alt="프로그램" title="프로그램">
          <div class="news-fig__txt">
            <p>투어기간에 펼쳐지는 10개분야 50가지의 다양한 프로그램을 즐겨보세요</p>
          </div>
        </div>
        <div class="news-card__foot"><a href="#" class="more">더보기</a></div>
      </div>
      <div class="news-card">
        <h3>서울여행</h3>
        <div class="news-fig">
          <img src="../제공파일/B_Module/투어소식/서울여행.jpg" alt="서울여행" title="서울여행">
          <div class="news-fig__txt">
            <p>조선왕조 수도 서울에서 소중한 추억을 만들어 보세요</p>
          </div>
        </div>
        <div class="news-card__foot"><a href="#" class="more">더보기</a></div>
      </div>
    </div>
  </div>
</section>

<!-- 투어 안내 -->
<section class="section">
  <div class="wrap">
    <h2 class="section-title">투어 안내 — 2026년 8월</h2>
    <div class="guide">
      <!-- 달력 -->
      <div class="calendar">
        <div class="calendar__top"><b>2026. 08</b></div>
        <div class="calendar__days-header">
          <div>일</div>
          <div>월</div>
          <div>화</div>
          <div>수</div>
          <div>목</div>
          <div>금</div>
          <div>토</div>
        </div>
        <div class="calendar__grid">
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="event">1</div>
          <div>2</div>
          <div>3</div>
          <div>4</div>
          <div>5</div>
          <div class="event">6</div>
          <div>7</div>
          <div>8</div>
          <div>9</div>
          <div>10</div>
          <div>11</div>
          <div>12</div>
          <div>13</div>
          <div>14</div>
          <div>15</div>
          <div class="event">16</div>
          <div>17</div>
          <div>18</div>
          <div>19</div>
          <div class="event">20</div>
          <div>21</div>
          <div>22</div>
          <div>23</div>
          <div>24</div>
          <div>25</div>
          <div>26</div>
          <div class="event">27</div>
          <div class="event">28</div>
          <div class="event">29</div>
          <div class="event">30</div>
          <div class="event">31</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
          <div class="empty">·</div>
        </div>
        <div class="cal-legend">
          <div class="guide-message">
            <i></i> 축제&amp;행사 · 전시&amp;공연이 있는 날
          </div>
          <div class="calendar-control">
            <button class="prev-btn btn">이전 달</button>
            <button class="next-btn btn">다음 달</button>
          </div>
        </div>
      </div>

      <!-- 탭 -->
      <div class="tabs">
        <div class="tabs__nav">
          <label onclick="location.href = '/'">전체</label>
          <label onclick="location.href = '/?category=1'">축제&amp;행사</label>
          <label onclick="location.href = '/?category=0'">전시&amp;공연</label>
        </div>
        <div class="tabs__body">
          <?php if (!$category) { ?>
            <ul class="panel panel-all">
              <?php foreach ($tours as $tour) { ?>
                <li><span><span class="badge"><?= $tour->category ?></span><?= $tour->title ?></span><span class="date"><?= $tour->start_date ?>~<?= $tour->end_date ?></span></li>
              <?php } ?>
            </ul>
          <?php } else if ($category == 1) { ?>
            <ul class="panel panel-show">
              <?php foreach ($tours as $tour) { ?>
                <li><span><span class="badge"><?= $tour->category ?></span><?= $tour->title ?></span><span class="date"><?= $tour->start_date ?>~<?= $tour->end_date ?></span></li>
              <?php } ?>
            </ul>
          <?php } else { ?>
            <ul class="panel panel-test">
              <?php foreach ($tours as $tour) { ?>
                <li><span><span class="badge"><?= $tour->category ?></span><?= $tour->title ?></span><span class="date"><?= $tour->start_date ?>~<?= $tour->end_date ?></span></li>
              <?php } ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 에디터 추천여행 -->
<section class="section">
  <div class="wrap">
    <h2 class="section-title">에디터 추천여행</h2>
    <input type="radio" name="ed" id="ed1" class="editor__r" checked>
    <input type="radio" name="ed" id="ed2" class="editor__r">
    <input type="radio" name="ed" id="ed3" class="editor__r">
    <input type="radio" name="ed" id="ed4" class="editor__r">
    <input type="radio" name="ed" id="ed5" class="editor__r">
    <input type="radio" name="ed" id="ed6" class="editor__r">
    <input type="radio" name="ed" id="ed7" class="editor__r">
    <input type="radio" name="ed" id="ed8" class="editor__r">
    <div class="editor__vp">
      <div class="editor__track">
        <label for="ed1" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/01_이화여자대학교.jpg" alt="이화여자대학교" title="이화여자대학교">
          <div class="ed-card__cap"><b>01. 이화여자대학교</b>
            <p>언덕 위 이화교회의 지붕이 푸른 하늘과 가을 나뭇잎 사이에서 빛난다.</p>
          </div>
        </label>
        <label for="ed2" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/02_홍제천.jpg" alt="홍제천" title="홍제천">
          <div class="ed-card__cap"><b>02. 홍제천</b>
            <p>높이 25m, 폭 60m. 자연과 어우러진 도심 속 인공 폭포.</p>
          </div>
        </label>
        <label for="ed3" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/03_가락시장.jpg" alt="가락시장" title="가락시장">
          <div class="ed-card__cap"><b>03. 가락시장</b>
            <p>40여 년 역사의 서울 최대 수산시장. 제철 해산물로 활기 넘치는 송파.</p>
          </div>
        </label>
        <label for="ed4" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/04_데몬헌터스.jpg" alt="K-POP DEMON HUNTERS" title="K-POP DEMON HUNTERS">
          <div class="ed-card__cap"><b>04. K-POP DEMON HUNTERS</b>
            <p>서울을 무대로 한 액션 판타지. 미래적 에너지와 전통의 매력.</p>
          </div>
        </label>
        <label for="ed5" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/05_수락휴.jpg" alt="수락휴" title="수락휴">
          <div class="ed-card__cap"><b>05. 수락휴</b>
            <p>노원구 수락산 자락의 고요한 숲속 힐링 공간.</p>
          </div>
        </label>
        <label for="ed6" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/06_국립현대미술관.jpg" alt="국립현대미술관" title="국립현대미술관">
          <div class="ed-card__cap"><b>06. 국립현대미술관</b>
            <p>북촌 한옥과 유리 건물이 맞닿는, 현대와 전통의 경계선.</p>
          </div>
        </label>
        <label for="ed7" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/07_선유도공원.jpg" alt="선유도공원" title="선유도공원">
          <div class="ed-card__cap"><b>07. 선유도공원</b>
            <p>양화대교 남단, 물과 정원·전시·휴식이 어우러진 한강공원.</p>
          </div>
        </label>
        <label for="ed8" class="ed-card">
          <img src="../제공파일/B_Module/추천여행/08_북한산백운대.jpg" alt="북한산 백운대" title="북한산 백운대">
          <div class="ed-card__cap"><b>08. 북한산 백운대</b>
            <p>높이 837m, 서울에서 가장 높은 봉우리.</p>
          </div>
        </label>
      </div>
    </div>
    <p class="editor__hint">이미지를 클릭하면 가운데로 이동하며 설명이 표시됩니다.</p>
  </div>
</section>

<!-- 홍보영상 -->
<section class="section">
  <div class="wrap">
    <h2 class="section-title">투어 홍보영상</h2>
    <input type="checkbox" id="promo" hidden>
    <div class="promo__stage">
      <div class="promo__v promo__v1"><video src="../제공파일/B_Module/홍보영상/1.mp4" autoplay muted loop playsinline></video></div>
      <div class="promo__v promo__v2"><video src="../제공파일/B_Module/홍보영상/2.mp4" autoplay muted loop playsinline></video></div>
      <label for="promo" class="promo__btn">
        <span class="to-next">다음영상보기</span>
        <span class="to-prev">이전영상보기</span>
      </label>
    </div>
  </div>
</section>

<script>
  let current = new Date();
  const now = new Date();
  const calendar = $(".calendar__grid");
  const header = $(".calendar__top b");
  const tours = <?= json_encode($tours) ?>;

  function render() {
    const year = current.getFullYear();
    const month = current.getMonth();
    const padding = `<div class='empty'>·</div>`.repeat(new Date(year, month, 1).getDay());
    const days = Array.from({
      length: new Date(year, month + 1, 0).getDate()
    }, (_, i) => {
      const d = i + 1;
      const calendarDate = new Date(year, month, d);

      const hasEvent = tours.some(tour => {
        const start = new Date(tour.start_date);
        const end = new Date(tour.end_date);
        return calendarDate >= start && calendarDate <= end;
      })
      return `<div class="${hasEvent ? 'event' : ''}">${d}</div>`;
    }).join("");
    calendar.innerHTML = padding + days;
    header.innerHTML = `${year}년 ${month + 1}월`
    $(".prev-btn").onclick = () => {
      current.setMonth(current.getMonth() - 1);
      render();
    };
    $(".next-btn").onclick = () => {
      current.setMonth(current.getMonth() + 1);
      render();
    };
  }
  render();
</script>