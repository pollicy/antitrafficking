@extends('layouts.app')
@section('content')

<!-- begin header --->
<div id="header">
  <img src="{{ asset('images/wetaase-header.jpg')}}" class="img-responsive"/>
</div>
<!-- end header -->


<!-- begin home -->
  <div class="row" id="home">
    <div class="col-md-6">
          <h3 class="text-left"><span class="label site-label site-header">what is human trafficking?</span></h3>
          <p>Human trafficking is the illegal transportation of people from one area or country to another, for the purposes of forced labour or commercial sexual exploitation. It is a form of modern-day slavery in which “traffickers” use force, fraud, or coercion to control their victims against their will.</p>
          <p>Labour trafficking can take the form of many settings such as domestic work, small businesses, factories and farms.Sex trafficking can often be found in the form of street prostitution, residential brothels, massage businesses and so on.</p>
          <p><div class="btn btn-lg btn-primary site-button"><a href="#learn-more">Learn More</a></div></p>
    </div>
    <div class="col-md-6 site-home ">
          <div class="alert site-top-alert">
            <p>Uganda’s Interpol office has reported that Ugandans are often trafficked to India, Afghanistan, Indonesia, and the countries in the Middle East such as Saudi Arabia and United Arab Emirates.. During the reporting period, Ugandan trafficking victims were identified in the United Kingdom, Greece, Poland, Iraq, Egypt, Qatar, South Sudan, Kenya, China, South Korea, Thailand, Malaysia, and the United States.</p>
          </div>
    </div>
  </div>
  <!-- end home -->

  <!-- begin graphic -->
  <div class="row">
    <div class="col-md-12">
      <img src="{{ asset('images/wetaase-graphic.png') }}"/>
    </div>
  </div>
  <!--end  graphic -->

  <!-- begin wetaase -->
  <div class="row" id="wetaase">
    <div class="col-md-6">
      <h3 class="text-left"><span class="label site-label site-header">Wetaase</span></h3>
    <p>Wetaase is an online and mobile platform serving high-risk individuals, victims and survivors of human trafficking from Uganda. The toll-free line is available 24 hours a day, 7 days a week in major Ugandan languages. Wetaase provides vital information, legal advice and aftercare support through our different channels and partnerships. We utilise this data to track and reduce incidences of human trafficking by monitoring domestic and transnational trafficking.</p>
    <p>The helpline can be accessed by called 0800 202 600. The helpline can also be accessed online by sending an email to helpline@wetaase.org, or by <a href="#contact">filling out this online form</a>, or by interacting with us on Facebook Messenger.</p>
  </div>
  <div class="col-md-6 site-alert-two">
    <p>Wetaase is not a government entity. We are not the police, immigration or an investigative agency. We are not a direct victim service provider. We help individuals access direct services through our networks network and we facilitate using data to tackle human trafficking.</p>
  </div>
  </div>
  <!-- end wetaase -->

  <!-- begin advisory -->
  <div class="row site-advisory" id="advisory">
    <h3 class="alert">We have put together a list of potential red flags and indicators of human trafficking to help you recognize the signs. If you see any of these RED FLAGS, <b>contact the Wetaase Hotline at 0800 202 600</b> for information on referral services or to report the situation.</h3>
    <div class="col-md-6">
      <ul>
        <li>Promises of employment opportunities with unreasonably high salary offers</li>
        <li>Unclear details of employer</li>
        <li>Unclear details about transportation to final destination</li>
        <li>Requests to break the law or lie to law enforcement personnel</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h3 class="text-left"><span class="label site-label site-header">How to Identify a Victim of Human Trafficking</span></h3>
      <ul>
        <li>Lack of freedom of movement</li>
        <li>Very little salary or pay</li>
        <li>Works long hours without breaks</li>
        <li>Exhibits signs of fear, anxiety or depression</li>
        <li>Poor health and potential lack of access to medical care</li>
        <li>Show signs of physical and/or sexual abuse, torture, confinement</li>
        <li>Lack of identification document, passport or any finances</li>
        <li>Inconsistencies in stories about their journey, place of employment, timeline etc.</li>
      </ul>
    </div>
  </div>
  <!-- end advisory -->

  <!-- begin resources -->
  <div class="row site-resources" id="resources">
    <div class="col-md-6">
      <h3 class="text-left"><span class="label site-label site-header">For Legal Advice, contact:</span></h3>
      <div class="panel-group">
        <div class="panel panel-info">
          <div class="panel-heading"><a href="https://barefootlaw.org"> Barefoot​ Law​ </a></div>
          <div class="panel-body">
            <p>Barefoot Law provides the public with free legal information using innovative approaches. They use technology in addition to the traditional methods to offer free legal information and assistance.</p>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading"><a href="http://www.pla-uganda.org/"> Platform for Labour Action</a></div>
          <div class="panel-body">
            <p>Platform for Labour Action (PLA) is a National Civil Society Organization focused on promoting and protecting the rights of vulnerable and marginalized workers through empowerment of communities and individuals in Uganda.</p>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading"><a href="http://fidauganda.org/pages/about-us/"> FIDA - Uganda</a></div>
          <div class="panel-body">
            <p>The Uganda Association of Women Lawyers (FIDA-Uganda) is one of the leading women’s rights organizations in Uganda with an established track record of promoting and defending human rights, with a focus on the rights of women with children as beneficiaries of this work.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <h3 class="text-left"><span class="label site-label site-header">For After-care Services, contact:</span></h3>
      <div class="panel-group">
        <div class="panel panel-info">
          <div class="panel-heading"><a href="http://willowintl.org/">Willow</a></div>
          <div class="panel-body">
            <p>Willow International is a nonprofit organization dedicated to the fight against human trafficking by empowering survivors to not only be free from slavery, but to heal from trauma and live full, healthy lives.</p>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading"><a href="http://notforsaleuganda.org/"> Not for Sale Uganda</a></div>
          <div class="panel-body">
            <p>Not For Sale fights modern-day slavery by evaluating mainstream supply chains, offering social services to survivors, and creating enterprise opportunities for vulnerable communities. By identifying impoverished and high trafficked communities, Not For Sale works to empower each against the rising tide of exploitation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end resources -->

  <!-- begin learn more -->
  <div id="learn-more" class="row">
    <div class="col-md-6">
      <h3 class="text-left"><span class="label site-label site-header">elements of human trafficking</span></h3>
      <div>
        <div class="alert site-alert-one">
          <div class="lead">The Act (What​ is​ done)</div>
          <div><p>Recruitment,​  ​ transportation,​  ​ transfer,​  ​ harbouring​  ​ or​  ​ receipt​  ​ of​  ​ persons</p></div>
        </div>
        <div class="alert site-alert-two">
          <div class="lead">The​ Means (How​ it​ is​ done)</div>
          <div><p>Threat or use of force, coercion, abduction, fraud, deception, abuse of power or vulnerability, or giving  payments​  ​ or​  ​ benefits​  ​ to​  ​ a​  ​ person​  ​ in​  ​ control​  ​ of​  ​ the​  ​ victim</p></div>
        </div>
        <div class="alert site-alert-three">
          <div class="lead">The​  ​ Purpose (Why it​ is​ done)</div>
          <div><p>For the purpose of exploitation, which includes exploiting the prostitution of others, sexual exploitation, forced​  ​ labour,​  ​ slavery​  ​ or​  ​ similar​  ​ practices​  ​ and​  ​ the​  ​ removal​  ​ of​  ​ organs.
                To ascertain whether a particular circumstance constitutes trafficking in persons, consider the definition of
                trafficking in the Trafficking in Persons Protocol and the constituent elements of the offense, as defined by
                relevant​  ​ domestic​  ​ legislation​.</p></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <blockquote>
        <p>According​  ​ to​  ​ the​  ​ U.S.​  ​ Department​  ​ of​  ​ State’s​  ​ 2010​  ​ Trafficking​  ​ in​  ​ Persons​  ​ Report,​  ​ the​  ​ only​  ​ Sub-Saharan
          African​  ​ countries​  ​ ranked​  ​ in​  ​ Tier​  ​ One​  ​ are​  ​ Nigeria​  ​ and​  ​ Mauritius.​  ​ In​  ​ Tier​  ​ Two,​  ​ there​  ​ are​  ​ 19​  ​ Sub-Saharan
          African​  ​ countries.​  ​ Tier​  ​ Two​  ​ is​  ​ reserved​  ​ for​  ​ those​  ​ “countries​  ​ whose​  ​ governments​  ​ do​  ​ not​  ​ fully​  ​ comply,”​  ​ but
          are​  ​ making​  ​ efforts​  ​ to​  ​ achieve​  ​ minimum​  ​ standards.​  ​ Another​  ​ 17​  ​ countries​  ​ in​  ​ Sub-Saharan​  ​ Africa​  ​ are​  ​ on​  ​ the
          Tier​  ​ Two​  ​ Watch​  ​ List
        </p>
        <footer><a href="​​ https://www.law.gonzaga.edu/gjil/2013/01/human-trafficking-trends-in-africa/">Human Trafficking: Trends in Africa</a></footer>
      </blockquote>
      <h3 class="text-left"><span class="label site-label site-header">what is human trafficking?</span></h3>
      <p>Trafficking in Persons is the recruitment, transportation, transfer, harbouring or receipt of persons, by means of the threat or use of force or other forms of coercion, of abduction, of fraud, of deception, of the abuse of power or of a position of vulnerability or of the giving or receiving of payments or benefits to achieve the consent of a person having control over another person, for the purpose of exploitation.</p>
      <p>Exploitation shall include, at a minimum, the exploitation of the prostitution of others or other forms of sexual exploitation, forced labour or services, slavery or practices similar to slavery, servitude or the removal of organs.</p>
    </div>
  </div>
  <!-- end learn more -->

  <!-- begin stories -->
  <!-- <div class="row" id="stories">
    <div class="col-md-12" style="text-align:center;">
      <h1>stories content goes here (as a text/content slider?)</h1>
    </div>
  </div> -->
  <!-- end stories -->


  <!-- begin contact -->
  <div class="row" id="contact">
    <div class="col-md-4 contact-form-section">
    </div>
    <div class="col-md-4 contact-form-section">
      <h3>Get in touch</h3>
      <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
      <div class="btn btn-danger btn-lg breather">send</div>
    </div>
    <div class="col-md-4 contact-form-section">
    </div>
    <!-- <div class="col-md-6 contact-form-section">
      <h1>map with location</h1>
    </div> -->
  </div>
  <!-- end contact -->

  <!-- begin get involved -->
  <div class="row site-get-involved site-alert-one">
    <h3>Get Involved</h3>
    <p>Wetaase aims connect everyday citizens with opportunities to raise awareness and get involved in local and national anti-trafficking initiatives.</p>
  </div>
  <!-- end begin get involved-->
@endsection
