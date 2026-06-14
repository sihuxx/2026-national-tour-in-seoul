<?php
$user = ss();
if($user->isAdmin != 1) back("관리자만 접근 할 수 있는 페이지입니다");
?>
<div class="relative-wrap">
    
<section class="section page-schedule">
    <div class="wrap">
        <div class="quick-link">
        <a href="/schedule" class="btn dark">투어 일정 설정</a>
        <a href="/course" class="btn">투어 코스 생성</a>
    </div>
    </div>
</section>

</div>