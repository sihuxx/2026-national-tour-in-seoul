<?php
$user = ss();
if($user->isAdmin != 1) back("관리자만 접근 할 수 있는 페이지입니다");
?>

<section class="section">
    <div class="quick-link">
        <a href="/schedule" class="btn">투어 일정 설정</a>
        <a href="/course" class="btn dark">투어 코스 생성</a>
    </div>
</section>