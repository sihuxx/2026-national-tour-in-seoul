<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>투어 in 서울</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
</head>

<?php
$user = ss();
?>

<body>

    <!-- 토글용 input -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <input type="checkbox" id="m-login" class="modal-t">
    <input type="checkbox" id="m-join" class="modal-t">

    <!-- 헤더 -->
    <header class="header">
        <div class="wrap">
            <a href="/" class="logo">투어 in 서울</a>
            <nav class="gnb">
                <a href="/sub">투어소개</a>
                <a href="/reserve">투어예약</a>
                <a href="/course">투어만들기</a>
                <a href="/event">행사등록</a>
            </nav>
            <div class="tools">
                <div class="search">
                    <span>검색</span>
                    <input type="search" placeholder="축제·행사" aria-label="검색">
                </div>
                <?php if ($user) { ?>
                    <a class="btn dark" href="/logout">로그아웃</a>
                <?php } else { ?>
                    <label for="m-login" class="btn">로그인</label>
                    <label for="m-join" class="btn dark">회원가입</label>
                <?php } ?>
            </div>
            <label for="nav-toggle" class="hamburger" aria-label="메뉴"><span></span></label>
        </div>
    </header>

    <!-- 모바일 내비 -->
    <label for="nav-toggle" class="mobile-backdrop"></label>
    <nav class="mobile-nav">
        <a href="sub.html">투어소개</a>
        <a href="#">투어예약</a>
        <a href="#">투어만들기</a>
        <a href="#">행사등록</a>
        <div class="mnav-auth">
            <?php if ($user) { ?>
                <label onclick="location.href = '/logout'">로그아웃</label>
            <?php } else { ?>
                <label for="m-login">로그인</label>
                <label for="m-join" class="join">회원가입</label>
            <?php } ?>
        </div>
    </nav>

    <!-- 로그인 모달 -->
    <div class="modal modal--login login-modal">
        <label for="m-login" class="modal__bd"></label>
        <div class="modal__panel">
            <label for="m-login" class="modal__close">×</label>
            <h3>로그인</h3>
            <form action="/login" method="post">
                <div class="field"><label for="li-id">아이디</label><input type="text" name="id" id="li-id" placeholder="아이디" required></div>
                <div class="field"><label for="li-pw">비밀번호</label><input type="password" name="pw" id="li-pw" placeholder="비밀번호" required></div>
                <button type="submit" class="btn-submit">로그인</button>
            </form>
            <p class="modal__alt">계정이 없으신가요? <label for="m-join">회원가입</label></p>
        </div>
    </div>

    <!-- 회원가입 모달 -->
    <div class="modal modal--join register-modal">
        <label for="m-join" class="modal__bd"></label>
        <div class="modal__panel">
            <label for="m-join" class="modal__close">×</label>
            <h3>회원가입</h3>
            <form action="/register" method="post">
                <div class="field"><label for="jo-id">아이디</label><input type="text" name="id" id="jo-id" placeholder="아이디" required></div>
                <div class="field"><label for="jo-pw">비밀번호</label><input type="password" name="pw" id="jo-pw" placeholder="비밀번호" required></div>
                <div class="field"><label for="jo-name">이름</label><input type="text" id="jo-name" name="name" placeholder="이름" required></div>
                <button type="submit" class="btn-submit">가입</button>
            </form>
            <p class="modal__alt">이미 계정이 있으신가요? <label for="m-login">로그인</label></p>
        </div>
    </div>

    <script src="/js/lib.js"></script>
    <script>
        let idValue = false,
            pwValue = false

        $(".register-modal").addEventListener('submit', () => {
            idValue = $("#jo-id").value.length >= 4;
            pwValue = /[a-zA-Z]/.test($("#jo-pw").value) && /[0-9]/.test($("#jo-pw").value) && $("#jo-pw").value.length >= 5;

            if (!idValue) return alert("아이디는 4자 이상이어야 합니다.");
            if (!pwValue) return alert("비밀번호는 영문과 숫자 조합으로 5자 이상이어야 합니다.");
        });
    </script>
    <script>
        async function load() {
            const data = await fetch('/asset/seoul_tour.json').then(res => res.json());

            const sql = data.DATA.map(item => {
                let cleanTitle = item.title.replace(/'+/g, "'");
                let cleanPlace = item.place.replace(/'+/g, "'");
                let cleanPhoto = item.photo.replace(/'+/g, "'"); // 👈 photo 추가!

                cleanTitle = cleanTitle.replace(/'/g, "''");
                cleanPlace = cleanPlace.replace(/'/g, "''");
                cleanPhoto = cleanPhoto.replace(/'/g, "''");

                return `INSERT INTO tours(title, category, start_date, end_date, time, place, organization, photo) VALUES ('${cleanTitle}', '${item.category}', '${item.startdate}', '${item.enddate}', '${item.time}', '${cleanPlace}', '${item.organization}', '${cleanPhoto}');`;
            });

            console.log(sql.join('\n'));
        }

        load();
    </script>