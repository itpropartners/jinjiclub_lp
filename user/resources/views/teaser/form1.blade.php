<!DOCTYPE html>
<html class="no-js" lang="ja">
  
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W93HCVB');</script>
<!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="人事のプロフェッショナルが、企業の採用課題、組織課題の解決をサポートするサービスです">
  <meta name="author" content="人事プロパートナーズ">
  <meta name="keywords" content="人事,仕事,フリーランス,起業家,案件,週2回">
  <title>人事倶楽部</title>
  <!--------  Facebook OGP画像  --------->
  <meta property="og:title" content="人事倶楽部">
  <meta property="og:description" content="人事について学べるオンラインサロンです。人事関連の交流を深めたり、人事についての情報を収集できる場を提供します。">
  <meta property="og:url" content="https://jinjiclub.com/lp">
  <meta property="og:image" content="https://jinjiclub.com/img/ogp.png">
  <meta property="og:site_name" content="人事倶楽部">
  <meta property="og:email" content="hrpro-info@hajimari.inc">
  <meta property="og:type" content="website">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@itproman_me">
  <meta name="twitter:creator" content="@itproman_me">
  <meta name="twitter:url" content="https://jinjiclub.com/lp">
  <meta name="twitter:title" content="人事倶楽部">
  <meta name="twitter:description" content="人事について学べるオンラインサロンです。人事関連の交流を深めたり、人事についての情報を収集できる場を提供します。">
  <meta name="twitter:image" content="https://jinjiclub.com/img/ogp.png">
  <script src="https://gacraft.jp/publish/cv_10327.js"></script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- favicon -->
  <link rel="shortcut icon" href="https://jinjiclub.com/img/favicon.ico">
  <!-- Style CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('teaser/assets/css/cssreset-min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">  
  <link rel="stylesheet" type="text/css" href="{{ asset('teaser/assets/css/style.css') }}"> 
</head>  

<body onload="initialize();">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W93HCVB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <nav class="clone-nav">
    <a href="/lp" class="wow fadeIn" data-wow-delay=".3s">
      <h1>人事倶楽部</h1>
    </a>
  </nav>  
  <header>
    <div class="wrapper">
      <div class="container">
<!--
        <div class="item">
          <h2>業務委託での採用人事活用の成功事例</h2>
          <p class="hidden_sp">右のフォームからダウンロードしてください。</p>
          <img class="panf" src="assets/img/img_panf_02.png" alt="資料イメージ" />
          <div class="outer">
            <div class="inner">
              <h3>こんな方におすすめ</h3>
              <ul>
                <li>どのような活用方法があるのか知りたい</li>
                <li>どのような企業が活用しているのか知りたい</li>
              </ul>
            </div>
          </div>
        </div>
--><!-- item -->
        <div class="item">

          <div class="item_form">
            <h2>サロン入会はこちら</h2>
            <div class="inner_form">

              <form method="POST" action="{{ route('teaser.form2') }}" accept-charset="UTF-8" id="contactForm" enctype="multipart/form-data">
                @csrf
                <label class="required" for="">氏名</label>
                <div class="row">
                  <input type="text" placeholder="山田" name="last_name" value="{{ old('last_name') }}" required="required"> 
                  <input type="text" placeholder="太郎" name="first_name" value="{{ old('first_name') }}" required="required"> 
                </div>
                <label class="required" for="">メールアドレス</label>
                <input type="mail" placeholder="email@hajimari.com" name="email" value="{{ old('email') }}" required="required">
                @error("email")
                    <strong style="color:red;">{{ $message }}</strong>
                @enderror
                <label class="required" for="">会社名</label>
                <input type="text" placeholder="株式会社Hajimari" name="company" value="{{ old('company') }}" required="required"> 
                <label for="">役職</label>
                <input type="text" name="position" value="{{ old('position') }}">
                
                <label for="">生年月日</label>
                  <select name="birthday_year">
                  <option value="">-</option>
                  <option value="1945" {{ (old('birthday_year') ==="1945") ? 'selected': '' }}>1945</option>
                  <option value="1946" {{ (old('birthday_year') ==="1946") ? 'selected': '' }}>1946</option>
                  <option value="1947" {{ (old('birthday_year') ==="1947") ? 'selected': '' }}>1947</option>
                  <option value="1948" {{ (old('birthday_year') ==="1948") ? 'selected': '' }}>1948</option>
                  <option value="1949" {{ (old('birthday_year') ==="1949") ? 'selected': '' }}>1949</option>
                  <option value="1950" {{ (old('birthday_year') ==="1950") ? 'selected': '' }}>1950</option>
                  <option value="1951" {{ (old('birthday_year') ==="1951") ? 'selected': '' }}>1951</option>
                  <option value="1952" {{ (old('birthday_year') ==="1952") ? 'selected': '' }}>1952</option>
                  <option value="1953" {{ (old('birthday_year') ==="1953") ? 'selected': '' }}>1953</option>
                  <option value="1954" {{ (old('birthday_year') ==="1954") ? 'selected': '' }}>1954</option>
                  <option value="1955" {{ (old('birthday_year') ==="1955") ? 'selected': '' }}>1955</option>
                  <option value="1956" {{ (old('birthday_year') ==="1956") ? 'selected': '' }}>1956</option>
                  <option value="1957" {{ (old('birthday_year') ==="1957") ? 'selected': '' }}>1957</option>
                  <option value="1958" {{ (old('birthday_year') ==="1958") ? 'selected': '' }}>1958</option>
                  <option value="1959" {{ (old('birthday_year') ==="1959") ? 'selected': '' }}>1959</option>
                  <option value="1960" {{ (old('birthday_year') ==="1960") ? 'selected': '' }}>1960</option>
                  <option value="1961" {{ (old('birthday_year') ==="1961") ? 'selected': '' }}>1961</option>
                  <option value="1962" {{ (old('birthday_year') ==="1962") ? 'selected': '' }}>1962</option>
                  <option value="1963" {{ (old('birthday_year') ==="1963") ? 'selected': '' }}>1963</option>
                  <option value="1964" {{ (old('birthday_year') ==="1964") ? 'selected': '' }}>1964</option>
                  <option value="1965" {{ (old('birthday_year') ==="1965") ? 'selected': '' }}>1965</option>
                  <option value="1966" {{ (old('birthday_year') ==="1966") ? 'selected': '' }}>1966</option>
                  <option value="1967" {{ (old('birthday_year') ==="1967") ? 'selected': '' }}>1967</option>
                  <option value="1968" {{ (old('birthday_year') ==="1968") ? 'selected': '' }}>1968</option>
                  <option value="1969" {{ (old('birthday_year') ==="1969") ? 'selected': '' }}>1969</option>
                  <option value="1970" {{ (old('birthday_year') ==="1970") ? 'selected': '' }}>1970</option>
                  <option value="1971" {{ (old('birthday_year') ==="1971") ? 'selected': '' }}>1971</option>
                  <option value="1972" {{ (old('birthday_year') ==="1972") ? 'selected': '' }}>1972</option>
                  <option value="1973" {{ (old('birthday_year') ==="1973") ? 'selected': '' }}>1973</option>
                  <option value="1974" {{ (old('birthday_year') ==="1974") ? 'selected': '' }}>1974</option>
                  <option value="1975" {{ (old('birthday_year') ==="1975") ? 'selected': '' }}>1975</option>
                  <option value="1976" {{ (old('birthday_year') ==="1976") ? 'selected': '' }}>1976</option>
                  <option value="1977" {{ (old('birthday_year') ==="1977") ? 'selected': '' }}>1977</option>
                  <option value="1978" {{ (old('birthday_year') ==="1978") ? 'selected': '' }}>1978</option>
                  <option value="1979" {{ (old('birthday_year') ==="1979") ? 'selected': '' }}>1979</option>
                  <option value="1980" {{ (old('birthday_year') ==="1980") ? 'selected': '' }}>1980</option>
                  <option value="1981" {{ (old('birthday_year') ==="1981") ? 'selected': '' }}>1981</option>
                  <option value="1982" {{ (old('birthday_year') ==="1982") ? 'selected': '' }}>1982</option>
                  <option value="1983" {{ (old('birthday_year') ==="1983") ? 'selected': '' }}>1983</option>
                  <option value="1984" {{ (old('birthday_year') ==="1984") ? 'selected': '' }}>1984</option>
                  <option value="1985" {{ (old('birthday_year') ==="1985") ? 'selected': '' }}>1985</option>
                  <option value="1986" {{ (old('birthday_year') ==="1986") ? 'selected': '' }}>1986</option>
                  <option value="1987" {{ (old('birthday_year') ==="1987") ? 'selected': '' }}>1987</option>
                  <option value="1988" {{ (old('birthday_year') ==="1988") ? 'selected': '' }}>1988</option>
                  <option value="1989" {{ (old('birthday_year') ==="1989") ? 'selected': '' }}>1989</option>
                  <option value="1990" {{ (old('birthday_year') ==="1990") ? 'selected': '' }}>1990</option>
                  <option value="1991" {{ (old('birthday_year') ==="1991") ? 'selected': '' }}>1991</option>
                  <option value="1992" {{ (old('birthday_year') ==="1992") ? 'selected': '' }}>1992</option>
                  <option value="1993" {{ (old('birthday_year') ==="1993") ? 'selected': '' }}>1993</option>
                  <option value="1994" {{ (old('birthday_year') ==="1994") ? 'selected': '' }}>1994</option>
                  <option value="1995" {{ (old('birthday_year') ==="1995") ? 'selected': '' }}>1995</option>
                  <option value="1996" {{ (old('birthday_year') ==="1996") ? 'selected': '' }}>1996</option>
                  <option value="1997" {{ (old('birthday_year') ==="1997") ? 'selected': '' }}>1997</option>
                  <option value="1998" {{ (old('birthday_year') ==="1998") ? 'selected': '' }}>1998</option>
                  <option value="1999" {{ (old('birthday_year') ==="1999") ? 'selected': '' }}>1999</option>
                  <option value="2000" {{ (old('birthday_year') ==="2000") ? 'selected': '' }}>2000</option>
                  <option value="2001" {{ (old('birthday_year') ==="2001") ? 'selected': '' }}>2001</option>
                  <option value="2002" {{ (old('birthday_year') ==="2002") ? 'selected': '' }}>2002</option>
                  <option value="2003" {{ (old('birthday_year') ==="2003") ? 'selected': '' }}>2003</option>
                  <option value="2004" {{ (old('birthday_year') ==="2004") ? 'selected': '' }}>2004</option>
                  <option value="2005" {{ (old('birthday_year') ==="2005") ? 'selected': '' }}>2005</option>
                  <option value="2006" {{ (old('birthday_year') ==="2006") ? 'selected': '' }}>2006</option>
                  <option value="2007" {{ (old('birthday_year') ==="2007") ? 'selected': '' }}>2007</option>
                  <option value="2008" {{ (old('birthday_year') ==="2008") ? 'selected': '' }}>2008</option>
                  <option value="2009" {{ (old('birthday_year') ==="2009") ? 'selected': '' }}>2009</option>
                  <option value="2010" {{ (old('birthday_year') ==="2010") ? 'selected': '' }}>2010</option>
                  <option value="2011" {{ (old('birthday_year') ==="2011") ? 'selected': '' }}>2011</option>
                  <option value="2012" {{ (old('birthday_year') ==="2012") ? 'selected': '' }}>2012</option>
                  <option value="2013" {{ (old('birthday_year') ==="2013") ? 'selected': '' }}>2013</option>
                  <option value="2014" {{ (old('birthday_year') ==="2014") ? 'selected': '' }}>2014</option>
                  <option value="2015" {{ (old('birthday_year') ==="2015") ? 'selected': '' }}>2015</option>
                  <option value="2016" {{ (old('birthday_year') ==="2016") ? 'selected': '' }}>2016</option>
                  <option value="2017" {{ (old('birthday_year') ==="2017") ? 'selected': '' }}>2017</option>
                  <option value="2018" {{ (old('birthday_year') ==="2018") ? 'selected': '' }}>2018</option>
                  <option value="2019" {{ (old('birthday_year') ==="2019") ? 'selected': '' }}>2019</option>
                  <option value="2020" {{ (old('birthday_year') ==="2020") ? 'selected': '' }}>2020</option>
                  </select>　年                
                  <select name="birthday_month">
                  <option value="">-</option>
                  <option value="1" {{ (old('birthday_month') ==="1") ? 'selected': '' }}>1</option>
                  <option value="2" {{ (old('birthday_month') ==="2") ? 'selected': '' }}>2</option>
                  <option value="3" {{ (old('birthday_month') ==="3") ? 'selected': '' }}>3</option>
                  <option value="4" {{ (old('birthday_month') ==="4") ? 'selected': '' }}>4</option>
                  <option value="5" {{ (old('birthday_month') ==="5") ? 'selected': '' }}>5</option>
                  <option value="6" {{ (old('birthday_month') ==="6") ? 'selected': '' }}>6</option>
                  <option value="7" {{ (old('birthday_month') ==="7") ? 'selected': '' }}>7</option>
                  <option value="8" {{ (old('birthday_month') ==="8") ? 'selected': '' }}>8</option>
                  <option value="9" {{ (old('birthday_month') ==="9") ? 'selected': '' }}>9</option>
                  <option value="10" {{ (old('birthday_month') ==="10") ? 'selected': '' }}>10</option>
                  <option value="11" {{ (old('birthday_month') ==="11") ? 'selected': '' }}>11</option>
                  <option value="12" {{ (old('birthday_month') ==="12") ? 'selected': '' }}>12</option>
                  </select>　月
                  <select name="birthday_day">
                  <option value="">-</option>
                  <option value="1" {{ (old('birthday_day') ==="1") ? 'selected': '' }}>1</option>
                  <option value="2" {{ (old('birthday_day') ==="2") ? 'selected': '' }}>2</option>
                  <option value="3" {{ (old('birthday_day') ==="3") ? 'selected': '' }}>3</option>
                  <option value="4" {{ (old('birthday_day') ==="4") ? 'selected': '' }}>4</option>
                  <option value="5" {{ (old('birthday_day') ==="5") ? 'selected': '' }}>5</option>
                  <option value="6" {{ (old('birthday_day') ==="6") ? 'selected': '' }}>6</option>
                  <option value="7" {{ (old('birthday_day') ==="7") ? 'selected': '' }}>7</option>
                  <option value="8" {{ (old('birthday_day') ==="8") ? 'selected': '' }}>8</option>
                  <option value="9" {{ (old('birthday_day') ==="9") ? 'selected': '' }}>9</option>
                  <option value="10" {{ (old('birthday_day') ==="10") ? 'selected': '' }}>10</option>
                  <option value="11" {{ (old('birthday_day') ==="11") ? 'selected': '' }}>11</option>
                  <option value="12" {{ (old('birthday_day') ==="12") ? 'selected': '' }}>12</option>
                  <option value="13" {{ (old('birthday_day') ==="13") ? 'selected': '' }}>13</option>
                  <option value="14" {{ (old('birthday_day') ==="14") ? 'selected': '' }}>14</option>
                  <option value="15" {{ (old('birthday_day') ==="15") ? 'selected': '' }}>15</option>
                  <option value="16" {{ (old('birthday_day') ==="16") ? 'selected': '' }}>16</option>
                  <option value="17" {{ (old('birthday_day') ==="17") ? 'selected': '' }}>17</option>
                  <option value="18" {{ (old('birthday_day') ==="18") ? 'selected': '' }}>18</option>
                  <option value="19" {{ (old('birthday_day') ==="19") ? 'selected': '' }}>19</option>
                  <option value="20" {{ (old('birthday_day') ==="20") ? 'selected': '' }}>20</option>
                  <option value="21" {{ (old('birthday_day') ==="21") ? 'selected': '' }}>21</option>
                  <option value="22" {{ (old('birthday_day') ==="22") ? 'selected': '' }}>22</option>
                  <option value="23" {{ (old('birthday_day') ==="23") ? 'selected': '' }}>23</option>
                  <option value="24" {{ (old('birthday_day') ==="24") ? 'selected': '' }}>24</option>
                  <option value="25" {{ (old('birthday_day') ==="25") ? 'selected': '' }}>25</option>
                  <option value="26" {{ (old('birthday_day') ==="26") ? 'selected': '' }}>26</option>
                  <option value="27" {{ (old('birthday_day') ==="27") ? 'selected': '' }}>27</option>
                  <option value="28" {{ (old('birthday_day') ==="28") ? 'selected': '' }}>28</option>
                  <option value="29" {{ (old('birthday_day') ==="29") ? 'selected': '' }}>29</option>
                  <option value="30" {{ (old('birthday_day') ==="30") ? 'selected': '' }}>30</option>
                  <option value="31" {{ (old('birthday_day') ==="31") ? 'selected': '' }}>31</option>
                  </select>　日                                  
                <label for="">アンケート</label>
                <div id="anq">
                   
                  <p>転職希望中ですか？</p>
                  <input type="radio" name="job_change_flg" value="1" id="a01" {{ (old('job_change_flg') ==="1") ? 'checked': '' }}>
                  <label for="a01">はい</label>
                  <input type="radio" name="job_change_flg" value="0" id="a02" {{ (old('job_change_flg')==="0") ? 'checked': '' }}>
                  <label for="a02">いいえ</label>
                  <p>副業にご興味はありますか？</p>
                  <input type="radio" name="side_business_flg" value="1" id="a03" {{ (old('side_business_flg') ==="1") ? 'checked': '' }}>
                  <label for="a03">はい</label>
                  <input type="radio" name="side_business_flg" value="0" id="a04" {{ (old('side_business_flg') ==="0") ? 'checked': '' }}>
                  <label for="a04">いいえ</label>
                  <p>イベントや動画コンテンツで興味のあるテーマがあれば教えてください</p>
                  <input type="text" name="note" value="{{ old('note') }}">
                </div>

                <input class="btn" type="submit" value="サロン入会する">
                <div class="sub">            
                  <div class="container_modal">
                    <div class="interior">
                      <a class="" href="#open-modal_1">利用規約</a>
                    </div>
                  </div>
                  <div class="container_modal">
                    <div class="interior">
                      <a class="" href="#open-modal_2">プライバシーポリシー</a>
                    </div>
                  </div>
                  をご確認・ご同意の上お進みください。
                </div>          
              </form>   
            </div>
          </div>

          
        </div><!-- item -->
      </div><!-- container -->
    </div><!-- wrapper -->
  </header>
  <section id="summaly">
    <div class="container wrapper">
      
    </div>
  </section>
 
<div id="open-modal_1" class="modal-window">
<div class="component__container">
    <a href="#" title="Close" class="modal-close">Close</a>

      <span class="closeBtn" data-izimodal-close=""></span>
      <h2 class="component__title">オンラインサロン「人事倶楽部」<br>利用規約</h2>
      <div>
          <div class="component__text">
              この利用規約（以下「本規約」といいます）は、株式会社Hajimari（以下「当社」といいます）がこのウェブサイト上で提供するサービス及びオンラインサロンにて提供するサービス（以下「本サービス」といいます）の利用条件を定めるものです。登録ユーザーの皆さま（以下「ユーザー」といいます）には、本規約に従って、本サービスをご利用いただきます。本サービスの利用者は、本規約に同意する前に本規約の全文を熟読し、内容を理解したうえで、本サービスを利用するものとし、本サービスを利用した者は、本規約に同意したものとみなします。
          </div>
          <div class="component__textTitle">第１条（適用）</div>
          <div class="component__text">
              １．本規約は、ユーザーと当社との間の本サービスの利用に関わる一切の関係に適用されるものとします。<br>
              ２．当社は本サービスに関し、本規約のほか，ご利用にあたってのルール等、各種の定め（以下、「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず、本規約の一部を構成するものとします。<br>
              ３．本規約の規定が前条の個別規定の規定と矛盾する場合には、個別規定において特段の定めなき限り、個別規定の規定が優先されるものとします。
          </div>
          <div class="component__textTitle">第２条（利用登録）</div>
          <div class="component__text">
              １．本サービスにおいては，登録希望者が本規約に同意の上、当社の定める方法によって利用登録を申請し、当社がこれを承認することによって、利用登録が完了するものとします。
              <br>
              ２．当社は、利用登録の申請者に以下の事由があると判断した場合、利用登録の申請を承認しないことがあり、その理由については一切の開示義務を負わないものとし、また、登録不承認に関し、いかなる責任も負いません。
              <br>
              　①利用登録の申請に際して虚偽の事項を届け出た場合<br>
              　②本規約に違反したことがある者からの申請である場合<br>
              　③その他、当社が利用登録を相当でないと判断した場合<br>
              　④反社会的勢力等（暴力団、暴力団員、右翼団体、反社会的勢力、その他これに準ずる者を意味します。以下同じ。）である、または資金提供その他を通じて反社会的勢力等の維持、運営もしくは経営に協力もしくは関与する等反社会的勢力等との何らかの交流もしくは関与を行っていると判断した場合<br>
          </div>
          <div class="component__textTitle">第３条（ユーザーIDおよびパスワードの管理）</div>
          <div class="component__text">
              １．ユーザーは、自己の責任において，本サービスのユーザーIDおよびパスワードを適切に管理するものとします。
              <br>
              ２．ユーザーは、いかなる場合にも、ユーザーIDおよびパスワードを第三者に譲渡または貸与し、もしくは第三者と共用することはできません。当社は、ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には、そのユーザーIDを登録しているユーザー自身による利用とみなします。
              <br>
              ３．ユーザーID及びパスワードが第三者によって使用されたことによって生じた損害について、当社は一切の責任を負わないものとします。
          </div>
          <div class="component__textTitle">第４条（利用料金および支払方法）</div>
          <div class="component__text">
              １．ユーザーは，本サービスの有料部分の対価として、当社が別途定め、本ウェブサイトに表示する利用料金を、当社が指定する方法により支払うものとします。
              <br>
              ２．ユーザーが利用料金の支払を遅滞した場合には、ユーザーは年14.6％の割合による遅延損害金を支払うものとします。
              <br>
              ３．当社は、当社の責めに帰すべき事由に基づく不当利得が生じた場合を除き、ユーザーから既に受領した利用料金の返還義務を負わないものとします。ご注意下さい。
          </div>
          <div class="component__textTitle">第５条（禁止事項）</div>
          <div class="component__text">
              １．ユーザーは、本サービスの利用にあたり、以下の行為をしてはなりません。
              <br>
              　１．法令または公序良俗に違反する行為
                <br>
              　２．犯罪行為に関連する行為
                <br>
              　３．本サービスの内容等、本サービスに含まれる著作権，商標権ほか知的財産権を侵害する行為
                <br>
              　４．当社、ほかのユーザー、またはその他第三者のサーバーまたはネットワークの機能を破壊したり、妨害したりする行為
                <br>
              　５．本サービスによって得られた情報を商業的に利用する行為
                <br>
              　６．当社のサービスの運営を妨害するおそれのある行為
                <br>
              　７．不正アクセスをし、またはこれを試みる行為
                <br>
              　８．他のユーザーに関する個人情報等を収集または蓄積する行為
                <br>
              　９．不正な目的を持って本サービスを利用する行為
                <br>
              　１０．本サービスの他のユーザーまたはその他の第三者に不利益、損害、不快感を与える行為
                <br>
              　１１．他のユーザーに成りすます行為
                <br>
              　１２．当社が許諾しない本サービス上での宣伝、広告、勧誘、または営業行為
                <br>
              　１３．面識のない異性との出会いを目的とした行為
                <br>
              　１４．当社のサービスに関連して、反社会的勢力に対して直接または間接に利益を供与する行為
                <br>
              　１５．当社または本サービスの名誉または信用を毀損する行為
                <br>
              　１６．その他、当社が不適切と判断する行為
                <br>
              ２．ユーザーが前項各号または本規約のその他の条項に違反し、これにより当社に損害が生じた場合、ユーザーは、当社に対し、当該損害を賠償するものとします。
          </div>
          <div class="component__textTitle">第６条（本サービスの提供の停止等）</div>
          <div class="component__text">
              １．当社は、以下のいずれかの事由があると判断した場合、ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。
              <br>
              　１．本サービスにかかるコンピュータシステムの保守点検または更新を行う場合
                <br>
              　２．地震、落雷、火災、停電または天災などの不可抗力により、本サービスの提供が困難となった場合
                <br>
              　３．コンピュータまたは通信回線等が事故により停止した場合
                <br>
              　４．その他、当社が本サービスの提供が困難と判断した場合
                <br>
              ２．当社は、本サービスの提供の停止または中断により、ユーザーまたは第三者が被ったいかなる不利益または損害について、一切の責任を負わないものとします。
          </div>
          <div class="component__textTitle">第７条（利用制限および登録抹消）</div>
          <div class="component__text">
              １．当社は、ユーザーが以下のいずれかに該当する場合には、事前の通知なく、ユーザーに対して、本サービスの全部もしくは一部の利用を制限し、またはユーザーとしての登録を抹消することができるものとします。
              <br>
              　１．本規約のいずれかの条項に違反した場合
                <br>
              　２．登録事項に虚偽の事実があることが判明した場合
                <br>
              　３．料金等の支払債務の不履行があった場合
                <br>
              　４．当社からの連絡に対し、一定期間返答がない場合
                <br>
              　５．本サービスについて、最終の利用から一定期間利用がない場合
                <br>
              　６．その他、当社が本サービスの利用を適当でないと判断した場合
                <br>
            ２．当社は、本条に基づき当社が行った行為により、ユーザーまたは第三者が被ったいかなる不利益または損害について、一切の責任を負わないものとします。
          </div>
          <div class="component__textTitle">第８条（退会）</div>
          <div class="component__text">
            １．ユーザーは、当社の定める退会手続により、本サービスから退会できるものとします。
            <br>
            ２．ユーザーが退会した場合であっても、ユーザーは、退会理由を問わず、退会した日の属する月の翌月分までの利用料金の支払義務を免れないものとします。ご注意下さい。
          </div>
          <div class="component__textTitle">第９条（保証の否認および免責事項）</div>
          <div class="component__text">
            １．当社は、以下に掲げる事項について一切保証しないものとします。会員は、本サービスの利用及び本サービスにより提供される情報の有用性等を自己の判断、かつ責任で利用するものとします。
            <br>
              　１．発信情報及び配信コンテンツの内容を含む、本サービスで提供される全ての情報（本サービスから提供される情報及び本サービス上に表示される第三者が管理又は運営するリンク先に含まれる一切の情報等を含みます。以下、本項において同様とします。）に関する、有用性、適合性、完全性、正確性、信頼性、安全性、合法性、道徳性、最新性
                <br>
              　２．会員間のやりとりに関する一切の事項
                <br>
              　３．本サービスの提供に不具合、エラーや障害が生じないこと
                <br>
              　４．本サービス及び各オンラインサロンの存続又は同一性が維持されること
                <br>
              　５．本サービスがユーザーに対し特定の効能、結果等をもたらすこと
                <br>
            ２．当社は、本サービスに起因してユーザーに生じたあらゆる損害について一切の責任を負いません。ただし、本サービスに関する当社とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合、この免責規定は適用されません。
            <br>
            ３．前項ただし書に定める場合であっても、当社は、当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当社またはユーザーが損害発生につき予見し、または予見し得た場合を含みます。）について一切の責任を負いません。また、当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害の賠償は、ユーザーから当該損害が発生した月に受領した利用料の額を上限とします。
            <br>
            4．当社は、本サービスに関して、ユーザーと他のユーザーまたは第三者との間において生じた取引、連絡または紛争等について一切の責任を負わないものとします。
          </div>
          <div class="component__textTitle">第１０条（サービス内容の変更等）</div>
          <div class="component__text">
            当社は、ユーザーに通知することなく、本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし、これによってユーザーに生じた損害について一切の責任を負わないものとします。
          </div>
          <div class="component__textTitle">第１１条（利用規約の変更）</div>
          <div class="component__text">
            当社は、必要な場合には、本約款を変更することができます。当社が、本約款を変更するときは、効力発生時期を定め、かつ、本約款を変更すること、変更後の本約款の内容及び効力発生時期を通知又はインターネットにより開示します。
          </div>
          <div class="component__textTitle">第１２条（個人情報の取扱い）</div>
          <div class="component__text">
            当社は、本サービスの利用によって取得する個人情報については、当社「プライバシーポリシー」に従い適切に取り扱うものとします。
          </div>
          <div class="component__textTitle">第１３条（通知または連絡）</div>
          <div class="component__text">
            ユーザーと当社との間の通知または連絡は、当社の定める方法によって行うものとします。 当社は、ユーザーから、当社が別途定める方式に従った変更届け出がない限り、現在登録され ている連絡先が有効なものとみなして当該連絡先へ通知または連絡を行い、これらは、発信 時にユーザーへ到達したものとみなします。
          </div>
          <div class="component__textTitle">第１４条（権利義務の譲渡の禁止）</div>
          <div class="component__text">
            ユーザーは、当社の書面による事前の承諾なく、利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し、または担保に供することはできません。
          </div>
          <div class="component__textTitle">第１５条（反社会的勢力の排除）</div>
          <div class="component__text">
              １．ユーザーは、当社に対し、以下の事項を表明し、保証します。．
              <br>
              　１．自ら又は関係者が反社会的勢力（暴力団、暴力団員、暴力団員でなくなった時から５年を経過しない者、暴力団準構成員、暴力団関係企業、総会屋等、社会運動等標ぼうゴロ又は特殊知能暴力集団等、その他これらに準ずる者）に該当しないこと
                <br>
              　２．暴力的行為、詐術、脅迫行為、業務妨害行為等の行為を行わないこと
                <br>
              ２．当社は、ユーザーが前項の１つにでも該当する場合、何ら通知をすることなく、直ちに、提供された情報の削除、本サービスの利用停止、登録抹消又は本サービスの利用契約の解除をすることができ、これらの措置について、一切の責任を負わないものとします
          </div>
          <div class="component__textTitle">第１６条（準拠法・裁判管轄）</div>
          <div class="component__text">
              １．本規約の解釈にあたっては、日本法を準拠法とします。
              <br>
              ２．本サービスに関して紛争が生じた場合には、当社の本店所在地を管轄する裁判所を専属的合意管轄とします。
          </div>
          <div class="component__text component__text--last">
              以上
              <br>
              令和２年１２月２４日作成
          </div>
      </div>
  </div>
</div>
<div id="open-modal_2" class="modal-window">
  <div>
    <a href="#" title="Close" class="modal-close">Close</a>

    <div class="component__container">
	    <h2 class="component__title">登録における個人情報の取扱いについて</h2>
	    <div>
	        <div class="regist_component__textTitle">（１)事業者の氏名または名称</div>
					<div class="component__text">株式会社Hajimari</div>
	        <div class="regist_component__textTitle">（２）個人情報の利用目的</div>
	        <div class="component__text">・登録サービスの管理 運営
	            <br>・資料送付
	            <br>・新着情報やイベント等の情報提供のため
	        </div>
	        <div class="regist_component__textTitle">（３）個人情報の第三者提供について</div>
	        <div class="component__text">取得した個人情報は法令等による場合を除いて第三者に提供することはありません。 </div>
	        <div class="regist_component__textTitle">（４）個人情報の取扱いの委託について</div>
	        <div class="component__text">取得した個人情報の取扱いの全部又は、一部を委託することはありません。 </div>
	        <div class="regist_component__textTitle">（５）個人情報を与えなかった場合に生じる結果</div>
	        <div class="component__text">個人情報を与えることは任意です。個人情報に関する情報の一部をご提供いただけない場合は、上記（２）個人情報の利用目的に定めるサービスを提供できない可能性があります。 </div>
	        <div class="regist_component__textTitle">（６）開示対象個人情報の開示等および問い合わせ窓口について</div>
	        <div class="component__text">ご本人からの求めにより、当社が保有する開示対象個人情報に関する開示、利用目的の通知、内容の訂正・追加または削除、利用停止、消去および第三者提供の停止(以下、開示等という)に応じます。 開示等に応ずる窓口は、下記「当社の個人情報の取扱いに関する苦情、相談等の問合せ先」を参照してください。 </div>
	        <div class="regist_component__textTitle">（７）本人が容易に認識できない方法による個人情報の取得</div>
	        <div class="component__text">クッキーやウェブビーコン等を用いるなどして、本人が容易に認識できない方法による個人情報の取得は行っておりません。 </div>
	        <div class="regist_component__textTitle">（８）個人情報の安全管理措置について</div>
	        <div class="component__text">取得した個人情報については、漏洩、減失またはき損の防止と是正、その他個人情報の安全管理のために必要かつ適切な措置を講じます。 </div>
	        <div class="regist_component__textTitle">（９）個人情報保護方針</div>
	        <div class="component__text">当社ホームページの個人情報保護方針をご覧下さい。 </div>
	        <div class="regist_component__textTitle margin-bottom">（10）当社の個人情報の取扱いに関する苦情、相談等の問合せ先</div>
	        <div class="component__textTitleAndtext">
	            <div class="component__textTitle bold margin-top0">個人情報に関する苦情・相談窓口</div>
	            <div class="component__text margin-bottom0">〒150-0043　渋谷区道玄坂1-16-10 渋谷DTビル8階
	                <br>株式会社Hajimari
	                <br>個人情報保護管理責任者　柳澤 雄也
	                <br>メールアドレス：contact@hajimari.inc
	                <br>TEL：03-6450-6076 / FAX：03-6450-6077
	                <br>（受付時間　9:30～18:30）
	            </div>
	        </div>
	    </div>
    </div>

    
  </div>
</div>

 
  <footer>
    <div class="wrapper">
      <div class="container">
        <p><a href="https://hajimari.inc/" target="_blank"><img src="{{ asset('teaser/assets/img/logo_cp.png') }}" alt="株式会社Hajimari" /></a></p>
        <ul>
          <li><a href="https://itpropartners.com/hr/biz">HOME</a> |</li>
          <li><a class="iframe" href="https://itpropartners.com/privacy/">個人情報の取り扱いについて</a> |</li>
          <!--<li><a class="iframe" href="https://scout.itpropartners.com/rules">利用規約</a> |</li>-->
          <li><a href="https://itpropartners.com/inquiry/" target="_blank">お問い合わせ</a></li>
        </ul>                
      </div>
    </div>
  </footer>
  <small>© 2019 Hajimari, INC.</small>
  
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <!-- Wow Animation -->
  <script src="{{ asset('teaser/assets/js/main.js') }}"></script>
  <script src="{{ asset('teaser/assets/js/wow.min.js') }}"></script>
  <script>
    new WOW().init();  
  </script>
  <script type="text/javascript" src="https://scout.itpropartners.com//js/min/fb/jquery.fancybox.js"></script>
  <link rel="stylesheet" type="text/css" href="https://scout.itpropartners.com//js/fb/jquery.fancybox.css" media="screen">
  <script type="text/javascript">
 jQuery("a.iframe").fancybox({
     'width': '100%',
       'height': '100%',
       'autoScale': false,
       'transitionIn': 'none',
       'transitionOut': 'none',
       'type' : 'iframe'

       });
  </script>

</body>
</html>

