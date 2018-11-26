@extends('layouts.master')

@section('content')

<link rel="stylesheet" type="text/css" href="/assets/css/whats_about.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<section class="whats_about_page">
<div class="wrap">
    <div class="left-box">
    <h2>空き状況の確認／予約リクエスト</h2>
<label id="angle-right">
選択中のスペース
<svg version="1.1" id="angle-right-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" width="40px" height="40px" viewBox="620 620 40 40" enable-background="new 620 620 40 40" xml:space="preserve">
<path fill="#0085BA" d="M652.029,642.125l-16.995,16.994c-1.175,1.174-3.074,1.174-4.236,0l-2.824-2.824
	c-1.174-1.175-1.174-3.074,0-4.236l12.046-12.046l-12.046-12.046c-1.174-1.175-1.174-3.074,0-4.236l2.812-2.849
	c1.174-1.174,3.074-1.174,4.236,0l16.995,16.995C653.203,639.05,653.203,640.949,652.029,642.125z"/>
</svg>
</label>
<form action="/request_chk" method="get">    
    <h3>プランを選択</h3>
        <div class="w-box pad">
            <h4>
                <img src="<?php echo url('assets/images/whats_about/dot-circle-regular.png'); ?>" alt="">
                <!--svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
	            <path id="cp2" fill="#CCCCCC" d="M20,3.871c8.914,0,16.129,7.215,16.129,16.129S28.915,36.129,20,36.129
		        c-8.914,0-16.129-7.215-16.129-16.129S11.085,3.871,20,3.871 M20,0C8.954,0,0,8.953,0,20s8.954,20,20,20s20-8.953,20-20
		        S31.046,0,20,0z M20,7.975C13.358,7.975,7.975,13.357,7.975,20S13.359,32.025,20,32.025S32.025,26.641,32.025,20
		        S26.642,7.975,20,7.975z"/>
	            <circle id="cp1" fill="#4ABFE6" cx="20" cy="20" r="12.025"/></svg-->
                二次会に最適 パーティーパック
                <span>￥1,500<i>/時間〜</i></span>
            </h4>
            <div class="price-manage" data-select-like-a-boss="1"><管理維持費＋￥800></div>
            <p class="auch">今すぐ予約OK</p>
            <p class="auch">直前割：5日前までの予約で15%割引</p>
            <p class="auch">最低利用時間2時間〜</p>
            <div class="read">
                3Fのテラスとキッチンスペース・4Fのカフェエリアをご自由に使って頂けます。 ※ ご利用スタートの最終時間は20時となります。 21時スタートや、22時スタート等の場合は、お受けできませんので、 20時が最終スタート時間となります。予めご容赦ねがいます。
            </div>
        </div>
        <div class="w-box pad">
            <h4>
                <img src="<?php echo url('assets/images/whats_about/dot-circle-regular.png'); ?>" alt="">
                <!--svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
	            <path id="cp2" fill="#CCCCCC" d="M20,3.871c8.914,0,16.129,7.215,16.129,16.129S28.915,36.129,20,36.129
		        c-8.914,0-16.129-7.215-16.129-16.129S11.085,3.871,20,3.871 M20,0C8.954,0,0,8.953,0,20s8.954,20,20,20s20-8.953,20-20
		        S31.046,0,20,0z M20,7.975C13.358,7.975,7.975,13.357,7.975,20S13.359,32.025,20,32.025S32.025,26.641,32.025,20
		        S26.642,7.975,20,7.975z"/>
	            <circle id="cp1" fill="#4ABFE6" cx="20" cy="20" r="12.025"/></svg-->
                パーティー利用も宿泊もOKプラン！！
                <span>￥1,500<i>/時間〜</i></span>　<span>￥9,000<i>/日〜</i></span>
            </h4>
            <div class="price-manage" data-select-like-a-boss="1"><管理維持費＋￥800></div>
            <p class="auch">今すぐ予約OK</p>
            <p class="auch">直前割：5日前までの予約で15%割引</p>
            <p class="auch">最低利用時間2時間〜</p>
            <div class="read">
                3Fのテラスとキッチンスペース・4Fのカフェエリアをご自由に使って頂けます。 ※ ご利用スタートの最終時間は20時となります。 21時スタートや、22時スタート等の場合は、お受けできませんので、 20時が最終スタート時間となります。予めご容赦ねがいます。
            </div>
        </div>
<p class="arrow-down"><svg version="1.1" id="ard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#C5C5C5" d="M1235.773,424.071l-34.011-34.011c-2.351-2.351-2.351-6.152,0-8.478l5.652-5.651
	c2.351-2.351,6.151-2.351,8.478,0L1240,400.037l24.107-24.107c2.351-2.351,6.152-2.351,8.478,0l5.652,5.651
	c2.351,2.351,2.351,6.152,0,8.478l-34.011,34.011C1241.926,426.421,1238.124,426.421,1235.773,424.071z"/>
</svg></p>
    <h3>利用タイプを選択</h3>
    <div class="w-box pad">
    <select class="type-choice">
        <option selected>時間価格￥1,500/時間〜</option>
        <option>時間価格￥1,000/時間〜</option>
        <option>時間価格￥500/時間〜</option>
    </select>
    <select class="type-choice">
    <option selected>1日価格￥9,000/日〜</option>
    </select>
    </div>
<p class="arrow-down"><svg version="1.1" id="ard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#C5C5C5" d="M1235.773,424.071l-34.011-34.011c-2.351-2.351-2.351-6.152,0-8.478l5.652-5.651
	c2.351-2.351,6.151-2.351,8.478,0L1240,400.037l24.107-24.107c2.351-2.351,6.152-2.351,8.478,0l5.652,5.651
	c2.351,2.351,2.351,6.152,0,8.478l-34.011,34.011C1241.926,426.421,1238.124,426.421,1235.773,424.071z"/>
</svg></p>

<h3>利用期間</h3>
    <div class="w-box pad">
        <table class="calendar">
        <tr>
            <td colspan="7" class="calendar-page"><a>＜</a>2018年7月<a>＞</a></td>
        </tr>
        <tr>
            <th>日</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
        </tr>
        <tr>
            <td class="is-unavailable">
                <p class="sp_calendar__date">1</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
                <td class="sp-reservation_calendar">
                    <p class="sp_calendar__date">2</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
                </td>
                <td class="sp-reservation_calendar">
                    <p class="sp_calendar__date">3</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
                </td>
                <td class="sp-reservation_calendar">
                    <p class="sp_calendar__date">4</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
                </td>
                <td class="sp-reservation_calendar">
                    <p class="sp_calendar__date">5</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
                </td>
                <td class="sp-reservation_calendar">
                    <p class="sp_calendar__date">6</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
                </td>
                <td class="sp-reservation_calendar">
                    <p class="sp_calendar__date">7</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
                </td>
        </tr>
        <tr>
            <td class="is-unavailable">
                <p class="sp_calendar__date">8</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">9</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">10</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">11</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">12</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">13</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">14</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="is-unavailable">
                <p class="sp_calendar__date">15</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">16</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">17</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">18</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">19</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">20</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">21</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">予約あり</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="is-unavailable">
                <p class="sp_calendar__date">22</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">23</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">24</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">25</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">26</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">27</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
            <td class="is-unavailable">
                <p class="sp_calendar__date">28</p>
                <div class="sp-reservation_calendar-content">
                    <p class="sp-reservation_calendar-done">不可</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="sp-reservation_calendar">
                <p class="sp_calendar__date">29</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
            </td>
            <td class="sp-reservation_calendar">
                <p class="sp_calendar__date">30</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
            </td>
            <td class="sp-reservation_calendar">
                <p class="sp_calendar__date">31</p>
                    <div class="sp-reservation_calendar-content">
                        <p class="sp-reservation_calendar-price">￥38,000〜</p>
                        <p class="sp-reservation_calendar-check"><i class="far fa-circle"></i></p>
                    </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <ul class="sp-daily_svFrt sp_period_Dfribg" style="position: relative;">
        <span>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">0:00 - 1:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">1:00 - 2:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">2:00 - 3:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">3:00 - 4:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">4:00 - 5:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">5:00 - 6:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">6:00 - 7:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">7:00 - 8:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">8:00 - 9:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">9:00 - 10:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">10:00 - 11:00</span>
                    <span class="sp_period_Dfribg-status">予約あり</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">11:00 - 12:00</span>
                    <span class="sp_period_Dfribg-status">不可</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">12:00 - 13:00</span>
                    <span class="sp_period_Dfribg-status">不可</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">13:00 - 14:00</span>
                    <span class="sp_period_Dfribg-status">不可</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">14:00 - 15:00</span>
                    <span class="sp_period_Dfribg-status">不可</span>
                </div>
            </li>
            <li class="is-unavailable">
                <div class="sp_period_Dfribg-content">
                <i class="fas fa-times fa-2x"></i><span class="sp_period_Dfribg-time">15:00 - 16:00</span>
                    <span class="sp_period_Dfribg-status">不可</span>
                </div>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">16:00 - 17:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">17:00 - 18:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">18:00 - 19:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">19:00 - 20:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x" ></i><span class="sp_period_Dfribg-time">20:00 - 21:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">21:00 - 22:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">22:00 - 23:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li>
            <li class="">
                    <div class="sp_period_Dfribg-content">
                    <i class="far fa-circle fa-2x"></i><span class="sp_period_Dfribg-time">23:00 - 0:00</span>
                        <span class="sp_period_Dfribg-status">￥1,968</span>
                    </div>
                </a>
            </li> 
    </ul> 
</div>        
<p class="arrow-down"><svg version="1.1" id="ard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#C5C5C5" d="M1235.773,424.071l-34.011-34.011c-2.351-2.351-2.351-6.152,0-8.478l5.652-5.651
	c2.351-2.351,6.151-2.351,8.478,0L1240,400.037l24.107-24.107c2.351-2.351,6.152-2.351,8.478,0l5.652,5.651
	c2.351,2.351,2.351,6.152,0,8.478l-34.011,34.011C1241.926,426.421,1238.124,426.421,1235.773,424.071z"/>
</svg></p>

<fieldset class="sp_usedivision_deiFgb">
    <legend class="reserve-subtitle">利用者区分を選択</legend>
    <div class="reserve-card sm-hide__guteter">
        <div class="reserve-card__inner reserve-plan__content clearfix">
            <div class="reserve-plan__name">
                <label><input checked="checked" name="facility_kind_id" type="radio" value="3" data-com.agilebits.onepassword.user-edited="yes">
                    <span class="reserve-plan__title">個人利用</span>
                </label>
            </div>
        </div>
        <div class="reserve-card__inner reserve-plan__content clearfix">
            <div class="reserve-plan__name">
            <label>
                <input checked="checked" name="facility_kind_id" type="radio" value="1">
                <span class="reserve-plan__title">法人利用</span>
            </label>
            </div>
        </div>
    </div>
</fieldset>

<p class="arrow-down"><svg version="1.1" id="ard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#C5C5C5" d="M1235.773,424.071l-34.011-34.011c-2.351-2.351-2.351-6.152,0-8.478l5.652-5.651
	c2.351-2.351,6.151-2.351,8.478,0L1240,400.037l24.107-24.107c2.351-2.351,6.152-2.351,8.478,0l5.652,5.651
	c2.351,2.351,2.351,6.152,0,8.478l-34.011,34.011C1241.926,426.421,1238.124,426.421,1235.773,424.071z"/>
</svg></p>

<fieldset class="sp_usedivision_deiFgb">
    <legend class="reserve-subtitle">決済方法を選択</legend>
    <div class="reserve-card sm-hide__guteter">
        <div class="reserve-card__inner reserve-plan__content clearfix">
            <div class="reserve-plan__name">
                <label><input checked="checked" name="facility_kind_id" type="radio" value="3" data-com.agilebits.onepassword.user-edited="yes">
                    <span class="reserve-plan__title">クレジットカード</span>
                </label>
            </div>
        </div>
        <div class="reserve-card__inner reserve-plan__content clearfix">
            <div class="reserve-plan__name">
            <label>
                <input checked="checked" name="facility_kind_id" type="radio" value="1">
                <span class="reserve-plan__title">銀行振込</span>
            </label>
            </div>
        </div>
    </div>
</fieldset>

<p class="arrow-down"><svg version="1.1" id="ard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#C5C5C5" d="M1235.773,424.071l-34.011-34.011c-2.351-2.351-2.351-6.152,0-8.478l5.652-5.651
	c2.351-2.351,6.151-2.351,8.478,0L1240,400.037l24.107-24.107c2.351-2.351,6.152-2.351,8.478,0l5.652,5.651
	c2.351,2.351,2.351,6.152,0,8.478l-34.011,34.011C1241.926,426.421,1238.124,426.421,1235.773,424.071z"/>
</svg></p>

    <h3>追加料金（オプション）</h3>
    <div class="w-box">
    <h5>設備・サービス</h5>
    <ul class="service">
        <li>
        <p><label><input type="checkbox">食器￥3,000/回</label></p>
        <p>
        こちらのオプションをご選択していただくと食器全般をご利用できます。 ※使用後は食器を洗い、元の場所へ戻してください。 ※設備の写真やサイズは添付ファイルのPDFに書いております。
        </p>
        </li>
        <li>
        <p><label><input type="checkbox">食器￥3,000/回</label></p>
        <p>
        こちらのオプションをご選択していただくと食器全般をご利用できます。 ※使用後は食器を洗い、元の場所へ戻してください。 ※設備の写真やサイズは添付ファイルのPDFに書いております。
        </p>
        </li>
        <li>
        <p><label><input type="checkbox">食器￥3,000/回</label></p>
        <p>
        こちらのオプションをご選択していただくと食器全般をご利用できます。 ※使用後は食器を洗い、元の場所へ戻してください。 ※設備の写真やサイズは添付ファイルのPDFに書いております。
        </p>
        </li>
        <li>
        <p><label><input type="checkbox">食器￥3,000/回</label></p>
        <p>
        こちらのオプションをご選択していただくと食器全般をご利用できます。 ※使用後は食器を洗い、元の場所へ戻してください。 ※設備の写真やサイズは添付ファイルのPDFに書いております。
        </p>
        </li>        
    </ul>    
    </div>
<p class="arrow-down"><svg version="1.1" id="ard" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#C5C5C5" d="M1235.773,424.071l-34.011-34.011c-2.351-2.351-2.351-6.152,0-8.478l5.652-5.651
	c2.351-2.351,6.151-2.351,8.478,0L1240,400.037l24.107-24.107c2.351-2.351,6.152-2.351,8.478,0l5.652,5.651
	c2.351,2.351,2.351,6.152,0,8.478l-34.011,34.011C1241.926,426.421,1238.124,426.421,1235.773,424.071z"/>
</svg></p>
    <div class="w-box pad" id="fee">
    <h4>利用期間</h4>

    <ul class="fee-list">
    <li><span>サービス料</span><span>￥0</span></li>
    <li><span>合計</span><span>￥0(税込価格 ￥0)</span></li>
    <li><span>&nbsp;</span>
    <span>
    <input type="submit" name="request" value="予約リクエストへ進む">
    <p class="readme">※まだ請求は発生しません。</p>
    </span>
    </li>
    </ul>
    <p class="caution"><svg version="1.1" id="ca" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#E95175" d="M1280,400c0,22.097-17.91,40-40,40s-40-17.903-40-40c0-22.083,17.91-40,40-40S1280,377.917,1280,400z
	 M1240,408.065c-4.098,0-7.419,3.322-7.419,7.419c0,4.098,3.321,7.42,7.419,7.42s7.419-3.322,7.419-7.42
	C1247.419,411.387,1244.098,408.065,1240,408.065z M1232.956,381.396l1.196,21.935c0.056,1.026,0.904,1.83,1.933,1.83h7.83
	c1.028,0,1.877-0.804,1.933-1.83l1.196-21.935c0.061-1.109-0.822-2.041-1.933-2.041h-10.223
	C1233.778,379.355,1232.896,380.287,1232.956,381.396L1232.956,381.396z"/>
</svg>最低利用時間は2時間です。</p>

<p>「予約リクエスト」を送信し、スペースオーナーが内容を確認後「承認」すると予約成立となります。<br>予約完了までのご利用の流れはこちらから確認いただけます。</p>

    </div>       
    </form>     
    

    </div>

    <aside>
    <div class="choice-box">
    <p id="w_close">×</p>
    <h3>選択中のスペース</h3>
        <div>
        <div class="thum">
        <img src="/assets/images/whats_about/img_thum01.jpg">
        </div>
        <p>直割15％オフ【テラスが最高♡手ぶらでBBQパーティー】原宿・明治神宮駅すぐ♡2フロアのカフェを貸切♡スーパーも近い</p>
        </div>    
    </div>
    <div class="request-box">
    <h3>現在の入力状況</h3>
        <div>
        <form action="/request_chk">
        <label>利用期間</label>
        <select><option>利用期間を選択して下さい</option></select>
        <p class="caution"><svg version="1.1" id="ca" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="1200 360 80 80" enable-background="new 1200 360 80 80" xml:space="preserve">
<path fill="#E95175" d="M1280,400c0,22.097-17.91,40-40,40s-40-17.903-40-40c0-22.083,17.91-40,40-40S1280,377.917,1280,400z
	 M1240,408.065c-4.098,0-7.419,3.322-7.419,7.419c0,4.098,3.321,7.42,7.419,7.42s7.419-3.322,7.419-7.42
	C1247.419,411.387,1244.098,408.065,1240,408.065z M1232.956,381.396l1.196,21.935c0.056,1.026,0.904,1.83,1.933,1.83h7.83
	c1.028,0,1.877-0.804,1.933-1.83l1.196-21.935c0.061-1.109-0.822-2.041-1.933-2.041h-10.223
	C1233.778,379.355,1232.896,380.287,1232.956,381.396L1232.956,381.396z"/>
</svg>最低利用時間は2時間です。</p>
        <input type="submit" name="request" value="予約リクエストへ進む">
        <p class="readme">※まだ請求は発生しません。</p>
        </form>        
        </div>    
    </div>
    
    </aside>
</div>

</section>

<script>
			$('#angle-right,#w_close').on('click',function () {
			$(".whats_about_page aside").slideToggle("fast");
			});
</script>
        
@stop
