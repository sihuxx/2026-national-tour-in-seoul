<?php
$user = ss();
if ($user->isAdmin != 1) back("관리자만 접속 가능한 페이지입니다");
$today = date('Y-m-d', strtotime('+1 day'));
?>

<section class="section pt">
    <div class="wrap">
        <p class="section-title">행사 등록</p>
        <form action="/eventAdd" method="post" enctype="multipart/form-data">
            <label>행사명 <input type="text" name="title" placeholder="행사명을 입력해주세요" required></label>
            <label>행사 시작일 <input type="date" min="<?= $today ?>" name="start_date" placeholder="행사 시작일을 입력해주세요" required></label>
            <label>행사 종료일 <input type="date" min="<?= $today ?>" name="end_date" placeholder="행사 종료일을 입력해주세요" required></label>
            <label>행사 시간 <input type="time" name="time" placeholder="행사 시간을 입력해주세요" required></label>
            <label>행사 장소 <input type="text" name="place" placeholder="행사 장소를 입력해주세요" required></label>
            <label>행사 분류
                <select name="category">
                    <option value="축제&행사">축제&행사</option>
                    <option value="전시&공연">전시&공연</option>
                </select>
            </label>
            <label>주최기관 <input type="text" name="organization" placeholder="주최기관 입력해주세요" required></label>
            <label>대표 이미지 <input type="file" name="photo" required></label>
            <button class="btn dark">추가</button>
        </form>
    </div>
</section>

<script src="/js/lib.js"></script>
<script>
const endInput = $("input[name='end_date'");
const startInput = $("input[name='start_date'");
startInput.onchange = () => {
    
}
</script>