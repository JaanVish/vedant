<?= $this->extend('layouts/front') ?>

<?= $this->section('content') ?>
<!-- Banner Section start -->
<section class="banner-section inner-banner soccer-bets">
    <div class="overlay">
        <div class="shape-area">
            <img src="assets/backend/images/winner-cup.png" class="obj-1" alt="image">
            <img src="assets/backend/images/coin-5.png" class="obj-2" alt="image">
            <img src="assets/backend/images/coin-3.png" class="obj-3" alt="image">
            <img src="assets/backend/images/coin-6.png" class="obj-4" alt="image">
            <img src="assets/backend/images/coin-9.png" class="obj-5" alt="image">
            <img src="assets/backend/images/coin-8.png" class="obj-6" alt="image">
            <img src="assets/backend/images/coin-7.png" class="obj-7" alt="image">
        </div>
        <div class="banner-content">
            <div class="container">
                <div class="content-shape">
                    <img src="assets/backend/images/coin-1.png" class="obj-8" alt="image">
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="main-content">
                            <h1>Challenges </h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex align-items-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Challenges</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end -->

<!-- All Challengess start -->
<!-- <section class="bet-this-game all-soccer-bets bets-2 tournaments-section">
    <div class="overlay">
        <div class="container">
            <div class="filter-section mb-60">
                <div class="section-text text-center">
                    <h3>All Challengess</h3>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="input-area">
                                <img src="assets/backend/images/icon/search-icon.png" alt="icon">
                                <input type="text" placeholder="Search by League name">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-input">
                                <select>
                                    <option>Search by team name</option>
                                    <option value="2">Team 1</option>
                                    <option value="3">Team 2</option>
                                    <option value="4">Team 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-input">
                                <select>
                                    <option>Select League</option>
                                    <option value="1">League 1</option>
                                    <option value="2">League 2</option>
                                    <option value="3">League 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="input-area">
                                <img src="assets/backend/images/icon/date-icon.png" alt="icon">
                                <input type="text" id="dateSelect" placeholder="Select Date">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row cus-mar">
                <div class="col-xxl-3 col-lg-4">
                    <div class="sidebar position-sticky top-0">
                        <div class="single-sidebar">
                            <h5 class="title-area m-none">Latest Teams</h5>
                            <div class="single-item">
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/team-logo-1.png" alt="icon">
                                            <span>Busan Ipark</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/team-logo-2.png" alt="icon">
                                            <span>Anyang</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/team-logo-3.png" alt="icon">
                                            <span>Raufoss</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/team-logo-4.png" alt="icon">
                                            <span>Åsane</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/team-logo-5.png" alt="icon">
                                            <span>Apollon</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h5 class="title-area">Latest Games</h5>
                            <div class="single-item">
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <span>Appollon <span class="vs">VS</span> Ethnikeos</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <span>Strommen <span class="vs">VS</span> Aalesund</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <span>Grorud <span class="vs">VS</span> Jerv</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <span>Fredrikstad <span class="vs">VS</span> stjordals</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <span>KFUM <span class="vs">VS</span> Sandnes UIf</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <span>Djurgarden <span class="vs">VS</span> Mjallby</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h5 class="title-area">Sports</h5>
                            <div class="single-item">
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-1.png" alt="icon">
                                            <span>Busan Ipark</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-2.png" alt="icon">
                                            <span>NBA</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-3.png" alt="icon">
                                            <span>Soccer</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-4.png" alt="icon">
                                            <span>American Football</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-5.png" alt="icon">
                                            <span>Horse Racing</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-6.png" alt="icon">
                                            <span>Rugby Union</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-7.png" alt="icon">
                                            <span>Ice Hockey</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-8.png" alt="icon">
                                            <span>Boxing</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-9.png" alt="icon">
                                            <span>Cricket</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-10.png" alt="icon">
                                            <span>Baseball</span>
                                        </span>
                                    </span>
                                </label>
                                <label class="checkbox-single d-flex align-items-center">
                                    <span class="left-area">
                                        <span class="checkbox-area d-flex">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </span>
                                        <span class="item-title d-flex align-items-center">
                                            <img src="assets/backend/images/icon/sports-logo-11.png" alt="icon">
                                            <span>Esports</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-lg-8">
                    <div class="single-item">
                        <div class="left-item">
                            <div class="logo-item">
                                <img src="assets/backend/images/icon/tournaments-logo-1.png" alt="icon">
                            </div>
                            <div class="mid-area">
                                <h3>Rage Fan Challenge</h3>
                                <ul>
                                    <li>
                                        <span><i class="far fa-calendar-alt"></i></span>
                                        NOV 27 23:00 - DEC 2 14:00
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i></span>
                                        43 PARTICIPANTS
                                    </li>
                                </ul>
                                <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                            </div>
                        </div>
                        <div class="last-item">
                            <h6>In Prizes</h6>
                            <h4>$2000</h4>
                            <span class="btn-border">
                                <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                            </span>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="left-item">
                            <div class="logo-item">
                                <img src="assets/backend/images/icon/tournaments-logo-2.png" alt="icon">
                            </div>
                            <div class="mid-area">
                                <h3>NBA Spotlight</h3>
                                <ul>
                                    <li>
                                        <span><i class="far fa-calendar-alt"></i></span>
                                        NOV 27 23:00 - DEC 2 14:00
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i></span>
                                        43 PARTICIPANTS
                                    </li>
                                </ul>
                                <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                            </div>
                        </div>
                        <div class="last-item">
                            <h6>In Prizes</h6>
                            <h4>$2000</h4>
                            <span class="btn-border">
                                <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                            </span>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="left-item">
                            <div class="logo-item">
                                <img src="assets/backend/images/icon/tournaments-logo-3.png" alt="icon">
                            </div>
                            <div class="mid-area">
                                <h3>NFL Week 11</h3>
                                <ul>
                                    <li>
                                        <span><i class="far fa-calendar-alt"></i></span>
                                        NOV 27 23:00 - DEC 2 14:00
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i></span>
                                        43 PARTICIPANTS
                                    </li>
                                </ul>
                                <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                            </div>
                        </div>
                        <div class="last-item">
                            <h6>In Prizes</h6>
                            <h4>$2000</h4>
                            <span class="btn-border">
                                <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                            </span>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="left-item">
                            <div class="logo-item">
                                <img src="assets/backend/images/icon/tournaments-logo-4.png" alt="icon">
                            </div>
                            <div class="mid-area">
                                <h3>Bitbetio Fall Classic</h3>
                                <ul>
                                    <li>
                                        <span><i class="far fa-calendar-alt"></i></span>
                                        NOV 27 23:00 - DEC 2 14:00
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i></span>
                                        43 PARTICIPANTS
                                    </li>
                                </ul>
                                <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                            </div>
                        </div>
                        <div class="last-item">
                            <h6>In Prizes</h6>
                            <h4>$2000</h4>
                            <span class="btn-border">
                                <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                            </span>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="left-item">
                            <div class="logo-item">
                                <img src="assets/backend/images/icon/tournaments-logo-5.png" alt="icon">
                            </div>
                            <div class="mid-area">
                                <h3>MLB Week</h3>
                                <ul>
                                    <li>
                                        <span><i class="far fa-calendar-alt"></i></span>
                                        NOV 27 23:00 - DEC 2 14:00
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i></span>
                                        43 PARTICIPANTS
                                    </li>
                                </ul>
                                <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                            </div>
                        </div>
                        <div class="last-item">
                            <h6>In Prizes</h6>
                            <h4>$2000</h4>
                            <span class="btn-border">
                                <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                            </span>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="left-item">
                            <div class="logo-item">
                                <img src="assets/backend/images/icon/tournaments-logo-6.png" alt="icon">
                            </div>
                            <div class="mid-area">
                                <h3>MLB Week 11</h3>
                                <ul>
                                    <li>
                                        <span><i class="far fa-calendar-alt"></i></span>
                                        NOV 27 23:00 - DEC 2 14:00
                                    </li>
                                    <li>
                                        <span><i class="fas fa-users"></i></span>
                                        43 PARTICIPANTS
                                    </li>
                                </ul>
                                <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                            </div>
                        </div>
                        <div class="last-item">
                            <h6>In Prizes</h6>
                            <h4>$2000</h4>
                            <span class="btn-border">
                                <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- All Challengess end -->

<section class="bet-this-game all-soccer-bets bets-2 tournaments-section">
    <div class="overlay pt-120">
        <div class="container">
            <div class="filter-section mb-60">
                <div class="section-text text-center">
                    <h3>All Challengess</h3>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="input-area">
                                <img src="assets/backend/images/icon/search-icon.png" alt="icon">
                                <input type="text" placeholder="Search by League name">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-input">
                                <select>
                                    <option>Search by team name</option>
                                    <option value="2">Team 1</option>
                                    <option value="3">Team 2</option>
                                    <option value="4">Team 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="single-input">
                                <select>
                                    <option>Select League</option>
                                    <option value="1">League 1</option>
                                    <option value="2">League 2</option>
                                    <option value="3">League 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="input-area">
                                <img src="assets/backend/images/icon/date-icon.png" alt="icon">
                                <input type="text" id="dateSelect" placeholder="Select Date">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-1.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>Rage Fan Challenge</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-2.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>NBA Spotlight</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-3.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>NFL Week 11</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-4.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>Bitbetio Fall Classic</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-5.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>MLB Week</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-6.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>MLB Week 11</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <nav aria-label="Page navigation" class="d-flex justify-content-center">
                                <ul class="pagination justify-content-center align-items-center">
                                    <li class="page-item">
                                        <a class="page-btn previous" href="javascript:void(0)" aria-label="Previous">
                                            <img src="assets/backend/images/icon/arrow-left.png" alt="icon">
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr active" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-btn next" href="javascript:void(0)" aria-label="Next">
                                            <img src="assets/backend/images/icon/arrow-right.png" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-4.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>Bitbetio Fall Classic</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-2.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>NBA Spotlight</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-6.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>MLB Week</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-1.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>Rage Fan Challenge</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-3.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>NFL Week 11</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-5.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>MLB Week</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <nav aria-label="Page navigation" class="d-flex justify-content-center">
                                <ul class="pagination justify-content-center align-items-center">
                                    <li class="page-item">
                                        <a class="page-btn previous" href="javascript:void(0)" aria-label="Previous">
                                            <img src="assets/backend/images/icon/arrow-left.png" alt="icon">
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr active" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-btn next" href="javascript:void(0)" aria-label="Next">
                                            <img src="assets/backend/images/icon/arrow-right.png" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-5.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>MLB Week</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-4.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>Bitbetio Fall Classic</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-6.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>MLB Week</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-1.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>Rage Fan Challenge</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-2.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>NBA Spotlight</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="left-item">
                                    <div class="logo-item">
                                        <img src="assets/backend/images/icon/tournaments-logo-3.png" alt="icon">
                                    </div>
                                    <div class="mid-area">
                                        <h3>NFL Week 11</h3>
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                NOV 27 23:00 - DEC 2 14:00
                                            </li>
                                            <li>
                                                <span><i class="fas fa-users"></i></span>
                                                43 PARTICIPANTS
                                            </li>
                                        </ul>
                                        <p>Compete for a chance to win one of five special Rage Fan NFT prizes.</p>
                                    </div>
                                </div>
                                <div class="last-item">
                                    <h6>In Prizes</h6>
                                    <h4>$2000</h4>
                                    <span class="btn-border">
                                        <a href="tournaments-details.html" class="cmn-btn">Join Now</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-60">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <nav aria-label="Page navigation" class="d-flex justify-content-center">
                                <ul class="pagination justify-content-center align-items-center">
                                    <li class="page-item">
                                        <a class="page-btn previous" href="javascript:void(0)" aria-label="Previous">
                                            <img src="assets/backend/images/icon/arrow-left.png" alt="icon">
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr active" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link xlr" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-btn next" href="javascript:void(0)" aria-label="Next">
                                            <img src="assets/backend/images/icon/arrow-right.png" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Betpop Up Modal start -->
<div class="betpopmodal">
    <div class="modal fade" id="betpop-up" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-9 col-lg-11">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="top-item">
                                    <a href="javascript:void(0)" class="cmn-btn firstTeam">Eagle will win</a>
                                    <a href="javascript:void(0)" class="cmn-btn active draw">Draw</a>
                                    <a href="javascript:void(0)" class="cmn-btn lastTeam">Paeek will win</a>
                                </div>
                                <div class="select-odds d-flex align-items-center">
                                    <h6>Select Odds</h6>
                                    <div class="d-flex in-dec-val">
                                        <input type="text" value="1.5" class="InDeVal2">
                                        <div class="btn-area">
                                            <button class="plus2">
                                                <img src="assets/backend/images/icon/up-arrow.png" alt="icon">
                                            </button>
                                            <button class="minus2">
                                                <img src="assets/backend/images/icon/down-arrow.png" alt="icon">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mid-area">
                                    <div class="single-area">
                                        <div class="item-title d-flex align-items-center justify-content-between">
                                            <span>Bet Value :</span>
                                            <select>
                                                <option value="eth">ETH</option>
                                                <option value="eth">ETH</option>
                                                <option value="eth">ETH</option>
                                            </select>
                                        </div>
                                        <div class="d-flex in-dec-val">
                                            <input type="text" value="0.1" class="InDeVal1">
                                            <div class="btn-area">
                                                <button class="plus">
                                                    <img src="assets/backend/images/icon/up-arrow.png" alt="icon">
                                                </button>
                                                <button class="minus">
                                                    <img src="assets/backend/images/icon/down-arrow.png" alt="icon">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-area quick-amounts">
                                        <div class="item-title d-flex align-items-center">
                                            <p>Quick Amounts</p>
                                        </div>
                                        <div class="input-item">
                                            <button class="quickIn">0.005</button>
                                            <button class="quickIn">0.025</button>
                                            <button class="quickIn">0.1</button>
                                            <button class="quickIn">0.5</button>
                                            <button class="quickIn">2.5</button>
                                        </div>
                                    </div>
                                    <div class="single-area smart-value">
                                        <div class="item-title d-flex align-items-center">
                                            <p class="mdr">Smart Contact Value</p>
                                        </div>
                                        <div class="contact-val d-flex align-items-center">
                                            <h4>0.1103</h4>
                                            <h5>ETH</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="fee-area">
                                        <p>Winner will get: <span class="amount">0.179</span> ETH</p>
                                        <p class="fee">Escrow Fee: <span>5%</span></p>
                                    </div>
                                    <div class="btn-area">
                                        <button>Make (0.1 ETH) Bet</button>
                                    </div>
                                    <div class="bottom-right">
                                        <p>Game Closes:</p>
                                        <p class="date-area">Mar <span>21,2021-1:00</span> Am</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Betpop Up Modal end -->
<?= $this->endSection() ?>