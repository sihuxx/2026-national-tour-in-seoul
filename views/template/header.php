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

<body>

    <!-- 토글용 input -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <input type="checkbox" id="m-login" class="modal-t">
    <input type="checkbox" id="m-join" class="modal-t">

    <!-- 헤더 -->
    <header class="header">
        <div class="wrap">
            <a href="index.html" class="logo">투어 in 서울</a>
            <nav class="gnb">
                <a href="sub.html">투어소개</a>
                <a href="#">투어예약</a>
                <a href="#">투어만들기</a>
                <a href="#">행사등록</a>
            </nav>
            <div class="tools">
                <div class="search">
                    <span>검색</span>
                    <input type="search" placeholder="축제·행사" aria-label="검색">
                </div>
                <label for="m-login" class="btn">로그인</label>
                <label for="m-join" class="btn dark">회원가입</label>
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
            <label for="m-login">로그인</label>
            <label for="m-join" class="join">회원가입</label>
        </div>
    </nav>

    <!-- 로그인 모달 -->
    <div class="modal modal--login">
        <label for="m-login" class="modal__bd"></label>
        <div class="modal__panel">
            <label for="m-login" class="modal__close">×</label>
            <h3>로그인</h3>
            <div class="field"><label for="li-id">아이디</label><input type="text" id="li-id" placeholder="아이디"></div>
            <div class="field"><label for="li-pw">비밀번호</label><input type="password" id="li-pw" placeholder="비밀번호"></div>
            <button type="button" class="btn-submit">로그인</button>
            <p class="modal__alt">계정이 없으신가요? <label for="m-join">회원가입</label></p>
        </div>
    </div>

    <!-- 회원가입 모달 -->
    <div class="modal modal--join">
        <label for="m-join" class="modal__bd"></label>
        <div class="modal__panel">
            <label for="m-join" class="modal__close">×</label>
            <h3>회원가입</h3>
            <div class="field"><label for="jo-id">아이디</label><input type="text" id="jo-id" placeholder="아이디"></div>
            <div class="field"><label for="jo-pw">비밀번호</label><input type="password" id="jo-pw" placeholder="비밀번호"></div>
            <div class="field"><label for="jo-name">이름</label><input type="text" id="jo-name" placeholder="이름"></div>
            <button type="button" class="btn-submit">가입</button>
            <p class="modal__alt">이미 계정이 있으신가요? <label for="m-login">로그인</label></p>
        </div>
    </div>