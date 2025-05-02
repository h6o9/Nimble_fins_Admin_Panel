@extends('frontend.layout.app')
@section('content')
<div id="page" class="page">
    <div id="main" class="clearfix">
      <div id="content" role="main" class="content">
        <article class="NodeTypeStudy--root">
          <!--ld+json structured data-->
          <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "Article",
              "headline": "Compare Cheap Car Insurance",
              "datePublished": "2018-09-07T08:36:03+00:00",
              "dateModified": "2025-02-17T11:36:57+00:00",
              "author": {
                "@type": "Person",
                "name": "Erin Yurday"
              },
              "image": [
                "https://res.cloudinary.com/nimblefins/image/upload/c_lfill,dpr_1.0,f_auto,h_1600,q_auto,w_1600/v1/UK/cdn/GettyImages-856956280"
              ],
              "publisher": {
                "@type": "Organization",
                "name": "NimbleFins",
                "logo": {
                  "@type": "ImageObject",
                  "url": "{{ asset('public/image.png') }}"
                }
              },
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.nimblefins.co.uk/cheap-car-insurance"
              }
            }
          </script>

          <div class="NodeTypeStudy--content">
            <header class="NodeTypeStudy--header">
              <h1 class="Node--title">Compare Cheap Car Insurance</h1>
              <a
                class="Byline--author"
                href="https://www.nimblefins.co.uk/author/erin-yurday"
                rel="author"
              >
                Erin Yurday, Founder
              </a>
              - February 17, 2025
            </header>
          </div>

          <div class="NodeTypeStudy--content-rows">
            <section class="section content-row push-down back-yellow">
              <div class="container clearfix back-yellow pad-half">
                <div class="container narrow">
                  <div class="flex">
                    <div class="ShortcodeVisibility--show-large">
                      <div class="full pad-half align-left clearfix">
                        <form
                          id="form"
                          style="
                            display: flex;
                            padding-top: 5px;
                            flex-direction: column;
                            align-items: center;
                          "
                        >
                          <label
                            style="
                              margin-top: 0;
                              margin-bottom: 10px;
                              font-size: 32px;
                            "
                            >Compare Car Insurance and Save Up to £515*</label
                          >
                          <label
                            style="
                              margin-top: 0;
                              margin-bottom: 10px;
                              font-size: 16px;
                            "
                            >Enter registration no. (optional):</label
                          >
                          <input
                            type="text"
                            id="input"
                            style="
                              background-image: url('https://res.cloudinary.com/nimblefins/image/upload/v1673461257/UK/cdn/GB_vehicle_registration_3.png');
                              background-size: cover;
                              background-color: transparent;
                              width: 174px;
                              height: 47px;
                              font-weight: bold;
                              padding-left: 40px;
                              vertical-align: middle;
                              color: white;
                              margin-bottom: 0px;
                            "
                          />
                          <button
                            type="submit"
                            id="button"
                            style="
                              width: 165px;
                              height: 43px;
                              border: none;
                              font-weight: bold;
                              text-decoration: underline;
                              background-color: #007bb4;
                              color: white;
                              vertical-align: middle;
                              margin-top: 10px;
                              padding: 0 0;
                            "
                          >
                            Compare quotes
                          </button>
                          <!-- <img style="margin-top: 10px; height:50px;" src="https://res.cloudinary.com/nimblefins/image/upload/v1699454040/UK/cdn/4.8_stars.png" alt="Reviews rating"> -->
                          <div
                            style="
                              font-size: 2em;
                              color: #007bb4;
                              margin-top: 10px;
                              margin-bottom: -5px;
                            "
                          >
                            <span class="star" style="color: #007bb4">★</span>
                            <span class="star" style="color: #007bb4">★</span>
                            <span class="star" style="color: #007bb4">★</span>
                            <span class="star" style="color: #007bb4">★</span>
                            <span
                              class="star-container"
                              style="
                                position: relative;
                                display: inline-block;
                              "
                            >
                              <span
                                class="star-half-filled"
                                style="
                                  position: absolute;
                                  left: 0;
                                  top: 0;
                                  width: 50%;
                                  overflow: hidden;
                                  color: #007bb4;
                                "
                                >★</span
                              >
                              <span
                                class="star-outline"
                                style="color: #007bb4"
                                >☆</span
                              >
                            </span>
                          </div>
                          <label
                            style="
                              margin-top: 10px;
                              margin-bottom: 5px;
                              font-size: 18px;
                            "
                            >4.8 out of 5 stars on Reviews.co.uk**
                          </label>
                          <label
                            style="
                              margin-top: 5px;
                              margin-bottom: 10px;
                              font-size: 18px;
                            "
                            >Cheap quotes from 110+ providers</label
                          >
                          <br />
                          <label
                            style="
                              margin-top: 5px;
                              margin-bottom: 10px;
                              font-size: 20px;
                            "
                            >"Yey - Just used your programme to find the best
                            car insurance deal!"</label
                          >
                          <label
                            style="
                              margin-top: 5px;
                              margin-bottom: 10px;
                              font-size: 16px;
                            "
                            ><i>- Customer feedback</i></label
                          >
                        </form>
                      </div>
                    </div>

                    <div class="ShortcodeVisibility--show-small">
                      <div class="full pad-none align-left clearfix">
                        <div class="half pad-none align-left clearfix">
                          <form
                            id="form2"
                            style="
                              display: flex;
                              padding-top: 0px;
                              flex-direction: column;
                              align-items: center;
                            "
                          >
                            <label
                              style="
                                margin-top: 0;
                                margin-bottom: 8px;
                                font-weight: bold;
                                font-size: 20px;
                              "
                              >Cheap Car Insurance</label
                            >
                            <label
                              style="
                                margin-top: 0;
                                margin-bottom: 10px;
                                font-weight: bold;
                                font-size: 16px;
                              "
                              >Compare and save up to £515*</label
                            >
                            <label style="margin-top: 0; margin-bottom: 10px"
                              >Enter registration no. (optional):</label
                            >
                            <input
                              type="text"
                              id="input2"
                              style="
                                background-image: url('https://res.cloudinary.com/nimblefins/image/upload/v1673461257/UK/cdn/GB_vehicle_registration_3.png');
                                background-size: cover;
                                background-color: transparent;
                                width: 174px;
                                height: 47px;
                                font-weight: bold;
                                padding-left: 40px;
                                vertical-align: middle;
                                color: white;
                                margin-bottom: 0px;
                              "
                            />
                            <button
                              type="submit"
                              id="button2"
                              style="
                                width: 165px;
                                height: 43px;
                                border: none;
                                font-weight: bold;
                                text-decoration: underline;
                                background-color: #007bb4;
                                color: white;
                                vertical-align: middle;
                                margin-top: 10px;
                                padding: 0 0;
                              "
                            >
                              Compare quotes
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-white">
              <div class="container clearfix back-white pad">
                <div class="container narrow">
                  <div class="flex">
                    <div class="full pad-none align-left clearfix">
                      <div class="half pad align-left clearfix">
                        <h2>Car insurance companies we work with</h2>

                        <p>
                          Compare up to 110 providers to find the cheapest car
                          insurance meeting your needs.
                        </p>
                      </div>

                      <div class="half pad-none align-left clearfix">
                        <br />

                        <div class="ShortcodeImage--root">
                          <div class="ShortcodeImage--image-container">
                            <img
                              alt="Image showing some of the NimbleFins panel car insurance providers"
                              class="ShortcodeImage--image lazyload"
                              data-src="https://res.cloudinary.com/nimblefins/image/upload/c_limit,dpr_1.0,f_auto,h_1600,q_auto,w_1600/v1/UK/cdn/car_providers"
                              src="//res.cloudinary.com/nimblefins/image/upload/e_blur:1000,q_1,f_auto/UK/cdn/car_providers"
                              data-srcset="https://res.cloudinary.com/nimblefins/image/upload/c_limit,dpr_1.0,f_auto,h_1600,q_auto,w_1600/v1/UK/cdn/car_providers 1x, https://res.cloudinary.com/nimblefins/image/upload/c_limit,dpr_2.0,f_auto,h_1600,q_auto,w_1600/v1/UK/cdn/car_providers 2x"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-light">
              <div class="container clearfix back-light pad">
                <div class="container narrow">
                  <div class="clearfix">
                    <h2>Compare Car Insurance Quotes</h2>

                    <p>
                      Can we find your cheapest quote? It’s quick and easy to
                      compare car insurance through NimbleFins.
                      <strong>For you. For better finances.</strong> We just
                      need a few details about: <br />
                    </p>

                    <div style="display: flex; justify-content: space-around">
                      <div
                        style="
                          border: 1px solid #000;
                          padding: 20px;
                          border-radius: 20px;
                          width: 30%;
                          box-sizing: border-box;
                          margin: 10px;
                        "
                      >
                        <h3 style="color: #007bb4; text-align: center">
                          You
                        </h3>
                        <p>
                          Your name, age, driving experience, where you live,
                          etc.
                        </p>
                      </div>
                      <div
                        style="
                          border: 1px solid #000;
                          padding: 20px;
                          border-radius: 20px;
                          width: 30%;
                          box-sizing: border-box;
                          margin: 10px;
                        "
                      >
                        <h3 style="color: #007bb4; text-align: center">
                          Your vehicle
                        </h3>
                        <p>Make, model, year, modifications, etc.</p>
                      </div>
                      <div
                        style="
                          border: 1px solid #000;
                          padding: 20px;
                          border-radius: 20px;
                          width: 33%;
                          box-sizing: border-box;
                          margin: 10px;
                        "
                      >
                        <h3 style="color: #007bb4; text-align: center">
                          The cover you want
                        </h3>
                        <p>
                          Choose from Comprehensive, TPFT, Short Term, Annual
                          Cover as well Voluntary Excess.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-blue">
              <div class="container clearfix back-blue pad">
                <div class="container narrow">
                  <div class="clearfix">
                    <div
                      style="
                        background-color: #017bb4;
                        color: white;
                        text-align: center;
                        padding: 20px;
                        margin: 0;
                      "
                    >
                      <div style="max-width: 600px; margin: 0 auto">
                        <h3 style="font-size: 2em; margin-bottom: 20px">
                          Join thousands of happy customers**
                        </h3>
                        <div
                          style="
                            font-size: 2em;
                            color: #fab402;
                            margin-bottom: 15px;
                          "
                        >
                          <span class="star" style="color: #fab402">★</span>
                          <span class="star" style="color: #fab402">★</span>
                          <span class="star" style="color: #fab402">★</span>
                          <span class="star" style="color: #fab402">★</span>
                          <span
                            class="star-container"
                            style="position: relative; display: inline-block"
                          >
                            <span
                              class="star-half-filled"
                              style="
                                position: absolute;
                                left: 0;
                                top: 0;
                                width: 50%;
                                overflow: hidden;
                                color: #fab402;
                              "
                              >★</span
                            >
                            <span class="star-outline" style="color: #fab402"
                              >☆</span
                            >
                          </span>
                        </div>
                        <div
                          style="
                            display: inline-block;
                            background-color: white;
                            color: black;
                            padding: 10px 15px;
                            border-radius: 5px;
                            font-size: 0.9em;
                          "
                        >
                          <img
                            src="https://res.cloudinary.com/nimblefins/image/upload/v1727368636/referral_logos/uk/reviews-io-logo.png"
                            alt="Reviews.io Logo"
                            style="
                              vertical-align: middle;
                              margin-right: 10px;
                              width: 150px;
                              height: 30px;
                            "
                          />
                           4.8 out of 5 stars
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-white">
              <div class="container clearfix back-white pad">
                <div class="container narrow">
                  <div class="clearfix">
                    <h2>More information on cheap car insurance companies</h2>

                    <ul>
                      <li>
                        <a
                          class="ShortcodeLink--root"
                          title="Compare best cheap car insurance"
                          href="#best"
                          ><strong
                            >NimbleFins ranks the top 10 best-rated car
                            insurance companies UK</strong
                          ></a
                        >
                      </li>
                      <li>
                        <a
                          class="ShortcodeLink--root"
                          title="Cheapest Car Insurance UK"
                          href="#cheapest"
                          ><strong>Cheapest car insurance UK</strong></a
                        >

                        <ul>
                          <li>
                            <a
                              class="ShortcodeLink--root"
                              title="Car insurance costs"
                              href="#cost"
                              >How much does car insurance cost?</a
                            >
                          </li>
                          <li>
                            <a
                              class="ShortcodeLink--root"
                              title="How to get cheaper car insurance"
                              href="#how"
                              >How to get cheaper car insurance</a
                            >
                          </li>
                          <li>
                            <a
                              class="ShortcodeLink--root"
                              title="Compare car insurance companies reviews"
                              href="#companies"
                              >Reviews: editor insights on these car insurance
                              companies</a
                            >
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-light">
              <div class="container clearfix back-light pad-none">
                <div class="container medium">
                  <div class="clearfix">
                    <p><br /></p>

                    <h2 id="best">
                      List of 10 Best-Rated Cheap UK Car Insurance Companies
                    </h2>

                    <p>
                      Our NimbleFins car insurance experts have developed a
                      new data-driven scoring system for car insurance. And
                      it's based on... a romantic relationship? Indeed!
                      Insurance is not so different from romance. Whether
                      you're looking for insurance or a partner, you ideally
                      want good features, easy communication, support in tough
                      times, financial stability, popularity with your friends
                      and family, and even some hope that a break up (if
                      necessary) won't be a nightmare if you decide to move
                      on.
                    </p>

                    <p>
                      With this in mind, our NimbleFins car insurance experts
                      have dug into FCA filings, policy wordings, and customer
                      reviews, then developed a new, data-driven car insurance
                      scorecard (read more about it
                      <a
                        class="ShortcodeLink--root"
                        title="Scoring system methodology"
                        href="#system"
                        >below</a
                      >) and used this to rank 10
                      <a
                        class="ShortcodeLink--root"
                        title="UK's largest car insurance companies"
                        href="https://www.nimblefins.co.uk/largest-car-insurance-companies"
                        >large UK insurance providers</a
                      >—ensuring you receive information you can trust. Who's
                      the best at communication, ticking all the boxes, and
                      breaking up? Find out here!
                    </p>

                    <div class="row">
                      <div class="js-table-container rel">
                        <div class="table-inner">
                          <table class="table auto Table--table">
                            <thead class="Table--thead">
                              <tr class="Table--tr">
                                <th
                                  class="align-left Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Rank
                                </th>
                                <th
                                  class="align-left Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Company
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Basics
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Dream
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Flexibility
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Breakup
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Communication
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Support
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Popularity
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Financial
                                </th>
                                <th
                                  class="align-center Table--th"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  Overall
                                </th>
                              </tr>
                            </thead>
                            <tbody class="Table--tbody">
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  1
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="LV= review"
                                    href="#lv"
                                    >LV=</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  10
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  10
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  2
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.3
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.2
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.39
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  2
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="Aviva review"
                                    href="#aviva"
                                    >Aviva</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  10
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.6
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9.1
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.35
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="Admiral review"
                                    href="#admiral"
                                    >Admiral</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  10
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.02
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="Direct Line review"
                                    href="#directline"
                                    >Direct Line</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.96
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="NFU Mutual review"
                                    href="#nfumutual"
                                    >NFU Mutual</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  10
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9.3
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.34
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="First Central review"
                                    href="#central"
                                    >1st Central</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.08
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="Hastings review"
                                    href="#hastings"
                                    >Hastings</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  2.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4.9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.9
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="AXA review"
                                    href="#axa"
                                    >AXA</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.3
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.73
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="Ageas review"
                                    href="#ageas"
                                    >Ageas</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  9.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  3.8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  6.9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.72
                                </td>
                              </tr>
                              <tr class="Table--tr">
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  10
                                </td>
                                <td
                                  class="align-left Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  <a
                                    class="ShortcodeLink--root"
                                    title="Allianz review"
                                    href="#allianz"
                                    >Allianz</a
                                  >
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  7.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  4.5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  1
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  8.9
                                </td>
                                <td
                                  class="align-center Table--td"
                                  width=""
                                  colspan=""
                                  rowspan=""
                                >
                                  5.59
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="table-footnote"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-white">
              <div class="container clearfix back-white pad">
                <div class="container narrow">
                  <div class="flex">
                    <div class="full pad align-left clearfix">
                      <h2 id="cheapest">
                        When is the best time to buy the cheapest car
                        insurance?
                      </h2>

                      <p>
                        According to an analysis by NimbleFins car insurance
                        experts, the
                        <a
                          class="ShortcodeLink--root"
                          rel="nofollow"
                          title="Best time to buy car insurance"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/buy-car-insurance-early-save-money"
                          >time to get the cheapest car insurance</a
                        >
                        is ~3 weeks before cover starts. The data showed that
                        buying car insurance early can save you up to 50% or
                        more. This NimbleFins research is supported by
                        commentary from <strong>Martin Lewis</strong>, who
                        said on
                        <a
                          class="ShortcodeLink--root"
                          rel="nofollow"
                          title="Martin Lewis ITV1 Tonight"
                          href="https://www.itv.com/watch/tonight/1a2803/1a2803a9400"
                          >ITV1's 4 April 2024 Tonight program</a
                        >
                        (for which NimbleFins provided research):
                      </p>

                      <blockquote>
                        <p>
                          "The perfect time to get car insurance is 23 days
                          before your renewal. That is (the time) for going
                          onto comparison sites to get different quotes. You
                          may pay nearly double if you wait to the last minute
                          to get your car insurance."
                        </p>
                      </blockquote>

                      <div class="ShortcodeVisibility--show-large">
                        <div
                          class="full pad-none back-white align-left clearfix"
                        >
                          <div class="half pad-big align-left clearfix">
                            <h3 class="alternate-font weight-bold align-left">
                              Car insurance comparison with NimbleFins
                            </h3>

                            <div class="row row-columns shortcodeList">
                              <div class="full column">
                                <ul class="arrow list">
                                  <li>You can save up to £515*</li>
                                  <li>
                                    4.8 out of 5 stars on Reviews.co.uk**
                                  </li>
                                  <li>Cheap quotes from 110+ providers</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="half pad align-left clearfix">
                            <form
                              id="form4"
                              style="
                                display: flex;
                                padding-top: 0px;
                                flex-direction: column;
                                align-items: center;
                              "
                            >
                              <label
                                style="
                                  color: #474747;
                                  margin-top: 0;
                                  margin-bottom: 0px;
                                  font-weight: bold;
                                  font-size: 20px;
                                "
                                >Car Insurance</label
                              >
                              <label
                                style="
                                  color: #474747;
                                  margin-top: 0;
                                  margin-bottom: 10px;
                                "
                                >Enter registration no. (optional):</label
                              >
                              <input
                                type="text"
                                id="input4"
                                style="
                                  background-image: url('https://res.cloudinary.com/nimblefins/image/upload/v1673461257/UK/cdn/GB_vehicle_registration_3.png');
                                  background-size: cover;
                                  background-color: transparent;
                                  width: 174px;
                                  height: 47px;
                                  font-weight: bold;
                                  padding-left: 40px;
                                  vertical-align: middle;
                                  color: white;
                                  margin-bottom: 0px;
                                "
                                maxlength="9"
                              />
                              <button
                                data-eventcategory="Cheap Car Insurance Quotezone"
                                data-eventlabel="Compare Cheap Car Insurance"
                                {{-- data-eventlocation="https://quote.nimblefins.co.uk/car-insurance-ui" --}}
                                title="Compare Cheap Car Insurance"
                                type="submit"
                                id="button4"
                                style="
                                  width: 165px;
                                  height: 43px;
                                  border: none;
                                  font-weight: bold;
                                  text-decoration: underline;
                                  background-color: #007bb4;
                                  color: white;
                                  vertical-align: middle;
                                  margin-top: 10px;
                                  padding: 0 0;
                                "
                              >
                                Show my quotes 
                              </button>
                              <script>
                                const input = document.getElementById("input");
                                const button = document.getElementById("button");
                              
                                // Enforce alphanumeric only, max 9 characters
                                input.addEventListener("input", function () {
                                  this.value = this.value.replace(/[^a-zA-Z0-9]/g, "").slice(0, 9);
                                });
                              
                                // Redirect when clicking the button
                                button.addEventListener("click", function () {
                                  const reg = input.value.trim();
                                  window.location.href =
                                    "https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa&kw=cheapcarheader&reg=" +
                                    reg;
                                });
                              </script>
                              <label
                              style="
                                margin-top: 0;
                                margin-bottom: 10px;
                                font-size: 16px;
                              "
                            >Enter registration no. (optional):</label>
                            <input
                              type="text"
                              id="input"
                              style="
                                background-image: url('https://res.cloudinary.com/nimblefins/image/upload/v1673461257/UK/cdn/GB_vehicle_registration_3.png');
                                background-size: cover;
                                background-color: transparent;
                                width: 174px;
                                height: 47px;
                                font-weight: bold;
                                padding-left: 40px;
                                vertical-align: middle;
                                color: white;
                                margin-bottom: 0px;
                              "
                              maxlength="9"
                            />
                            <button
                              type="button"
                              id="button"
                              style="
                                width: 165px;
                                height: 43px;
                                border: none;
                                font-weight: bold;
                                text-decoration: underline;
                                background-color: #007bb4;
                                color: white;
                                vertical-align: middle;
                                margin-top: 10px;
                                padding: 0 0;
                              "
                            >
                              Compare quotes
                            </button>
                            
                            <script>
                              const input = document.getElementById("input");
                              const button = document.getElementById("button");
                            
                              // Enforce alphanumeric only, max 9 characters
                              input.addEventListener("input", function () {
                                this.value = this.value.replace(/[^a-zA-Z0-9]/g, "").slice(0, 9);
                              });
                            
                              // Redirect when clicking the button
                              button.addEventListener("click", function () {
                                const reg = input.value.trim();
                                window.location.href =
                                  "https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa&kw=cheapcarheader&reg=" +
                                  reg;
                              });
                            </script>
                            
                            </form>
                          </div>
                        </div>
                      </div>

                      <div class="ShortcodeVisibility--show-small">
                        <div class="full pad back-white align-left clearfix">
                          <div class="half pad-none align-left clearfix">
                            <form
                              id="form5"
                              style="
                                display: flex;
                                padding-top: 0px;
                                flex-direction: column;
                                align-items: center;
                              "
                            >
                              <label
                                style="
                                  color: #474747;
                                  margin-top: 0;
                                  margin-bottom: 0px;
                                  font-weight: bold;
                                  font-size: 20px;
                                "
                                >Compare Car Insurance</label
                              >
                              <label
                                style="
                                  color: #474747;
                                  margin-top: 0;
                                  margin-bottom: 10px;
                                  font-weight: bold;
                                  font-size: 16px;
                                "
                                >You can save up to £515*</label
                              >
                              <label
                                style="
                                  color: #474747;
                                  margin-top: 0;
                                  margin-bottom: 10px;
                                "
                                >Enter registration no. (optional):</label
                              >
                              <input
                                type="text"
                                id="input5"
                                style="
                                  background-image: url('https://res.cloudinary.com/nimblefins/image/upload/v1673020027/UK/cdn/GB_vehicle_registration_png.png');
                                  background-size: cover;
                                  background-color: transparent;
                                  width: 174px;
                                  height: 47px;
                                  font-weight: bold;
                                  padding-left: 40px;
                                  vertical-align: middle;
                                  color: white;
                                  margin-bottom: 0px;
                                "
                                maxlength="9"
                              />
                              <button
                                data-eventcategory="Cheap Car Insurance Quotezone"
                                data-eventlabel="Compare Cheap Car Insurance"
                                {{-- data-eventlocation="https://quote.nimblefins.co.uk/car-insurance-ui" --}}
                                title="Compare Cheap Car Insurance"
                                type="submit"
                                id="button5"
                                style="
                                  width: 165px;
                                  height: 43px;
                                  border: none;
                                  font-weight: bold;
                                  text-decoration: underline;
                                  background-color: #007bb4;
                                  color: white;
                                  vertical-align: middle;
                                  margin-top: 10px;
                                  padding: 0 0;
                                "
                              >
                                Show my quotes
                              </button>
                              <script>
                                const input = document.getElementById("input");
                                const button = document.getElementById("button");
                              
                                // Enforce alphanumeric only, max 9 characters
                                input.addEventListener("input", function () {
                                  this.value = this.value.replace(/[^a-zA-Z0-9]/g, "").slice(0, 9);
                                });
                              
                                // Redirect when clicking the button
                                button.addEventListener("click", function () {
                                  const reg = input.value.trim();
                                  window.location.href =
                                    "https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa&kw=cheapcarheader&reg=" +
                                    reg;
                                });
                              </script>
                            </form>
                          </div>
                        </div>
                      </div>

                      <h2 id="cost">How much does car insurance cost?</h2>

                      <p>
                        The
                        <a
                          class="ShortcodeLink--root"
                          title="How much is car insurance UK?"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/average-cost-car-insurance-uk"
                          >average cost of UK car insurance</a
                        >
                        is around £600 per year, but prices vary widely
                        <a
                          class="ShortcodeLink--root"
                          title="What affects the price of your car insurance?"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/what-factors-affect-your-premium"
                          >depending on many factors</a
                        >, including the insurance company, type of cover
                        (TPO, TPFT or Comprehensive), details of your car
                        (age, make, model, trim level, value, etc.), driving
                        record—and driver age.
                      </p>

                      <p>
                        For example, data in the table and chart below show
                        how cheap car insurance quotes change according to the
                        age of sample drivers of a used Ford. Drivers around
                        55 years old typically get the cheapest car insurance,
                        according to NimbleFins analysis.
                      </p>

                      <div class="row">
                        <div class="js-table-container rel">
                          <div class="table-inner">
                            <table class="table auto Table--table">
                              <thead class="Table--thead">
                                <tr class="Table--tr">
                                  <th
                                    class="align-left Table--th"
                                    width="auto"
                                    colspan="2"
                                    rowspan=""
                                  >
                                    Average Cost of Cheap Comprehensive Car
                                    Insurance, <em>by Driver Age</em>
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="Table--tbody">
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    20 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £851
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    25 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £719
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    35 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £639
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    45 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £575
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    55 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £468
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    65 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £491
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    75 Years
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    £752
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="table-footnote"></div>
                      </div>

                      <div class="ShortcodeImage--root">
                        <div class="ShortcodeImage--image-container">
                          <img
                            alt="chart showing how car insurance quotes depend on age"
                            class="ShortcodeImage--image lazyload"
                            data-src="https://res.cloudinary.com/nimblefins/image/upload/c_limit,dpr_1.0,f_auto,h_1600,q_auto,w_1600/v1/UK/autoinsurance/Average_Cost_Car_Insurance_by_Age_QZ_2"
                            src="//res.cloudinary.com/nimblefins/image/upload/e_blur:1000,q_1,f_auto/UK/autoinsurance/Average_Cost_Car_Insurance_by_Age_QZ_2"
                            data-srcset="https://res.cloudinary.com/nimblefins/image/upload/c_limit,dpr_1.0,f_auto,h_1600,q_auto,w_1600/v1/UK/autoinsurance/Average_Cost_Car_Insurance_by_Age_QZ_2 1x, https://res.cloudinary.com/nimblefins/image/upload/c_limit,dpr_2.0,f_auto,h_1600,q_auto,w_1600/v1/UK/autoinsurance/Average_Cost_Car_Insurance_by_Age_QZ_2 2x"
                          />
                        </div>
                        <div class="ShortcodeImage--caption">
                          How Car Insurance Prices Change with Driver Age
                        </div>
                      </div>

                      <h2 id="how">How to get cheaper car insurance</h2>

                      <p>
                        As we discuss in more detail in our article,
                        <a
                          class="ShortcodeLink--root"
                          title="Top Tips to Save Money on Car Insurance"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/how-to-get-cheap-car-insurance"
                          >10 Ways to Save Money on Car Insurance</a
                        >, there are loads of ways to help bring your rate
                        down. The easiest tip is to get many cheap car
                        insurance quotes before you buy, for instance through
                        a comparison site like our car insurance partner
                        <a
                          data-eventcategory="In text click to quote"
                          data-eventlabel="Compare Car Insurance"
                          class="ShortcodeLink--root js-event-click"
                          rel="nofollow"
                          title="QuoteZone"
                          href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                          >QuoteZone</a
                        >.
                      </p>

                      <div class="row row-columns shortcodeList">
                        <div class="full column">
                          <ol class="number list">
                            <li>
                              <strong>Type of Cover:</strong> If your car is
                              very old and not worth much you might decide
                              that a lower level of cover is sufficient for
                              your needs, but generally speaking it's best to
                              get comprehensive cover (and it usually doesn't
                              cost that much more money anyway)
                            </li>
                            <li>
                              <strong
                                >Pick a car with a low insurance group
                                rating:</strong
                              >
                              some cars cost 2X, 3X or more to insure versus
                              other cars, so check a car's insurance group
                              before buying (insurance groups are administered
                              by Thatcham)
                            </li>
                            <li>
                              <strong
                                >Compare prices to get multiple quotes every
                                year:</strong
                              >
                              head to a comparison site to make this easier
                            </li>
                            <li>
                              <strong
                                >Install a telematics black box
                                tracker:</strong
                              >
                              especially for young drivers
                            </li>
                            <li>
                              <strong>Increase the voluntary excess:</strong>
                              as long as you're comfortable paying this excess
                              if you claim
                            </li>
                            <li>
                              <strong
                                >Pay your premium upfront instead of
                                monthly:</strong
                              >
                              paying monthly nearly always means you'll pay
                              extra interest charges
                            </li>
                            <li>
                              <strong>Don't automatically renew:</strong>
                              generally speaking, insurance companies don't
                              reward loyalty so be sure to check prices for a
                              brand new policy from your current insurer—if
                              it's less, negotiate
                            </li>
                            <li>
                              <strong>Avoid business driving:</strong>
                              <a
                                class="ShortcodeLink--root"
                                title="Do I need business use car insurance?"
                                href="https://www.nimblefins.co.uk/business-insurance/business-car-insurance"
                                >Business use car insurance</a
                              >
                              nearly always costs more than social, domestic,
                              pleasure, and commuting driving
                            </li>
                            <li>
                              <strong>Multi car insurance:</strong> If there's
                              more than one vehicle in your household, you
                              could save 15% or more with a multi-car policy.
                              With some insurance providers you can even put
                              different types of vehicle on one policy (e.g.,
                              a family fleet policy can cover cars,
                              motorbikes, vans and more).
                            </li>
                            <li>
                              <strong>Don't get in an accident:</strong>
                              building up your no claims bonus can save you
                              50% or more
                            </li>
                            <li>
                              <strong
                                >Don't get extra cover you don't need:</strong
                              >
                              think carefully before you add extra add on
                              features to decide if you really need them
                            </li>
                          </ol>
                        </div>
                      </div>

                      <h2>What's the best car insurance comparison site?</h2>

                      <p>
                        There are 5 main car insurance comparison search
                        engines in the UK (listed alphabetically): Compare the
                        Market, Confused, Go Compare, Moneysupermarket and
                        QuoteZone (who NimbleFins has partnered with for car
                        insurance comparison). But which is the best?
                      </p>

                      <p>
                        To help figure that out we gathered the latest
                        customer rating data from Trustpilot and
                        Reviews.co.uk. Here's what we found:
                      </p>

                      <div class="row">
                        <div class="js-table-container rel">
                          <div class="table-inner">
                            <table class="table auto Table--table">
                              <thead class="Table--thead">
                                <tr class="Table--tr">
                                  <th
                                    class="align-left Table--th"
                                    width="auto"
                                    colspan="2"
                                    rowspan=""
                                  >
                                    Best Car Insurance Comparison Sites
                                  </th>
                                  <th
                                    class="align-right Table--th"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Trustpilot Score
                                  </th>
                                  <th
                                    class="align-right Table--th"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Reviews.io Rating
                                  </th>
                                  <th
                                    class="align-right Table--th"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Weighted Average (based on the number of
                                    reviews)
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="Table--tbody">
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    1
                                  </td>
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Compare the Market
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.8
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.2
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.80
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    2
                                  </td>
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Moneysupermarket
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.8
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    3.3
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.79
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    3
                                  </td>
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    QuoteZone
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.7
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.8
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.75
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4
                                  </td>
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Go Compare
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.7
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.6
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.62
                                  </td>
                                </tr>
                                <tr class="Table--tr">
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    5
                                  </td>
                                  <td
                                    class="align-left Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    Confused
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.3
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.5
                                  </td>
                                  <td
                                    class="align-right Table--td"
                                    width=""
                                    colspan=""
                                    rowspan=""
                                  >
                                    4.49
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="table-footnote"></div>
                      </div>

                      <p>
                        According to the publicly available data, Compare the
                        Market has the best overall customer reviews, barely
                        beating out our partner QuoteZone by only 0.04 of a
                        point. Both companies have an average customer rating
                        of ~4.8 stars out of 5. A strong rating can be a sign
                        that a comparison site offers cheap prices to save
                        customers money, is easy to use and displays clear and
                        easy-to-understand information. You can get quotes
                        with QuoteZone through our interface
                        <a
                          data-eventcategory="In text click to quote"
                          data-eventlabel="Compare Car Insurance"
                          class="ShortcodeLink--root js-event-click"
                          title="Compare Car Insurance"
                          href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                          >here</a
                        >.
                      </p>

                      <p>
                        Moneysupermarket ranked second, with Go Compare and
                        Confused coming in fourth and fifth, respectively.
                      </p>

                      <p>
                        To see which car insurance companies are in each of
                        the panels, read more in our article
                        <a
                          class="ShortcodeLink--root"
                          title="What's the best car insurance comparison site?"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/best-car-insurance-comparison-site"
                          >What's the best car insurance comparison site?</a
                        >
                      </p>
                      <h2>FAQs</h2>
                      <div class="accordion" id="accordionFAQs">
                          @foreach($faqs as $faq)
                      <div
                        class="ShortcodeToggle--root ShortcodeToggle--article"
                        id=""
                      >
                        <button
                          class="ShortcodeToggle--toggle"
                          onclick="this.parentNode.classList.toggle('ShortcodeToggle--open');"
                        >
                        {{ $faq->questions }}
                          {{-- Who are the cheapest car insurance companies? --}}
                        </button>
                        <div class="ShortcodeToggle--contents-wrapper">
                          <div class="ShortcodeToggle--contents" style="font-family: 'Source Sans Pro', sans-serif; font-size:122%;">
                            {{-- <p> --}}
                                {!! $faq->answers !!}
                              {{-- While there is no cheapest car insurance company
                              for everyone, these companies tend to offer
                              lower prices than their competitors: AXA,
                              Admiral (including Diamond and Elephant), Aviva
                              (Quotemehappy), the Direct Line Group (Privilege
                              and Churchill). To see how these companies
                              compare in terms of customer service, customer
                              ratings and features, see our comparison --}}
                              {{-- <a
                                class="ShortcodeLink--root"
                                title="Best cheap UK car insurance companies"
                                href="#cheap"
                                >here</a
                              >. --}}
                            {{-- </p> --}}
                          </div>
                        </div>
                    </div>
                    @endforeach
                      </div>
                      {{-- <div
                        class="ShortcodeToggle--root ShortcodeToggle--article"
                        id=""
                      >
                        <button
                          class="ShortcodeToggle--toggle"
                          onclick="this.parentNode.classList.toggle('ShortcodeToggle--open');"
                        >
                          What is the best rated car insurance company?
                        </button>
                        <div class="ShortcodeToggle--contents-wrapper">
                          <div class="ShortcodeToggle--contents">
                            <p>
                              Among the more affordable car insurance brands
                              in the market, LV= ranked as the best rated in
                              our
                              <a
                                class="ShortcodeLink--root"
                                title="Best cheap UK car insurance companies"
                                href="#cheap"
                                >study</a
                              >
                              of the best cheap car insurance brands, due to
                              strong customer reviews (TrustPilot score of
                              4.7), a strong set of features and a solid
                              Fairer Finance score of 63% (although this has
                              dropped from 65% a few years ago).
                            </p>
                          </div>
                        </div>
                      </div>

                      <div
                        class="ShortcodeToggle--root ShortcodeToggle--article"
                        id=""
                      >
                        <button
                          class="ShortcodeToggle--toggle"
                          onclick="this.parentNode.classList.toggle('ShortcodeToggle--open');"
                        >
                          Which is the cheapest car insurance comparison site?
                        </button>
                        <div class="ShortcodeToggle--contents-wrapper">
                          <div class="ShortcodeToggle--contents">
                            <p>
                              There is no one cheapest car insurance
                              comparison site for all people, so compare
                              prices at a few sites before you buy. Get
                              started with quotes from our car insurance
                              comparison site partner
                              <a
                                data-eventcategory="In text click to quote"
                                data-eventlabel="Compare Car Insurance"
                                class="ShortcodeLink--root js-event-click"
                                rel="nofollow"
                                title="QuoteZone"
                                href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                                >QuoteZone</a
                              >
                              to see if they have the cheapest deal for you.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div
                        class="ShortcodeToggle--root ShortcodeToggle--article"
                        id=""
                      >
                        <button
                          class="ShortcodeToggle--toggle"
                          onclick="this.parentNode.classList.toggle('ShortcodeToggle--open');"
                        >
                          How do I get my certificate of motor insurance?
                        </button>
                        <div class="ShortcodeToggle--contents-wrapper">
                          <div class="ShortcodeToggle--contents">
                            <p>
                              Your insurance provider or broker should deliver
                              the certificate of motor insurance to you within
                              4 days. They will either email it to you or make
                              it available via a customer portal on their
                              website. (They won't post it to you unless you
                              ask, and there might be a charge for receiving
                              it this way.)
                            </p>
                          </div>
                        </div>
                      </div>

                      <div
                        class="ShortcodeToggle--root ShortcodeToggle--article"
                        id=""
                      >
                        <button
                          class="ShortcodeToggle--toggle"
                          onclick="this.parentNode.classList.toggle('ShortcodeToggle--open');"
                        >
                          How much profit do car insurance companies make?
                        </button>
                        <div class="ShortcodeToggle--contents-wrapper">
                          <div class="ShortcodeToggle--contents">
                            <p>
                              Car insurance companies earn an average profit
                              margin of around 16%, which means 84% of the
                              money they earn from revenue sources like
                              premiums, add ons and premium finance is used in
                              running the business and paying out on insurance
                              claims. The other 16% is profit.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div
                        class="ShortcodeToggle--root ShortcodeToggle--article"
                        id=""
                      >
                        <button
                          class="ShortcodeToggle--toggle"
                          onclick="this.parentNode.classList.toggle('ShortcodeToggle--open');"
                        >
                          How can I find a cheap car insurance company for a
                          convicted driver?
                        </button>
                        <div class="ShortcodeToggle--contents-wrapper">
                          <div class="ShortcodeToggle--contents">
                            <p>
                              It depends on the number of points and
                              seriousness of the offences. Comparison sites
                              and popular car insurance companies can be a
                              good place to start if you have a minor offence
                              and just a handful of points. However, if you
                              have more points or a more serious offence (e.g.
                              drink driving) then you might need to engage the
                              services of a specialist broker.
                            </p>
                          </div>
                        </div>
                      </div> --}}

                      <h2 id="earn">
                        How much do car insurance companies earn?
                      </h2>

                      <p>
                        In the UK, car insurance companies earn an average
                        profit margin of around 16% a year. This means that
                        for every £100 of revenues, the company makes £16 of
                        profit and has costs of £84.
                      </p>

                      <p>
                        However, earning vary from one company to the next,
                        and from one year to the next. For example, in the
                        latest full financial year Admiral earned £596.5
                        million of profits on £3,776 mililion of turnover (UK
                        insurance), yielding a profit ratio of 16%. But that
                        year, Direct Line had a loss of £251 million on their
                        insurance business.
                      </p>

                      <p>
                        The overall figures reflect an average across all
                        policies—money-making policies (e.g., with no claims
                        or small claims) and money-losing policies (e.g.,
                        policies with large claims). Interestingly, the core
                        underwriting businesses tend to be money losers.
                        Insurers turn a profit thanks to selling add-ons like
                        breakdown cover, charging fees and selling premium
                        finance (lending policyholders money to enable monthly
                        payments).
                      </p>

                      <h2 id="companies">
                        Reviews of Top 10 Best, Cheap Car Insurance Companies
                      </h2>

                      <p>
                        When comparing car insurance companies, are you
                        looking for the cheapest quotes, easy-to-access
                        customer service, the most features, or something
                        else? Check out how popular UK car insurance brands
                        like Admiral, Direct Line/Churchill, Allianz, Aviva
                        and AXA compare using the new data-driven NimbleFins
                        Scoring System. While no single insurance provider is
                        the cheapest or best for everyone, some companies
                        stand out for their combination of features. Use this
                        information to help you decide which might be best for
                        you.
                      </p>

                      <h2 id="lv">1. LV=</h2>

                      <div>
                        <div class="scorecard">
                          <h2>LV=</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/lv-1"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 7.39
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">10</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">10</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">2</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.5</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9.5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.3</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5.2</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        In a detailed analysis conducted in 2024, the
                        NimbleFins Scoring System found that LV= is the best
                        overall car insurance company. LV= ranked particularly
                        well in the <strong>basics</strong> and
                        <strong>dream</strong> categories in which they scored
                        10 out of 10 because they offer a solid set of policy
                        features, such as windscreen cover, higher personal
                        accident cover, solid belongings cover (£300), long EU
                        stays (180 days), a lifetime repair guarantee,
                        misfueling cover, vandalism no claims protection,
                        higher cover for accommodation or transport after an
                        accident (up to £500) and more.
                      </p>

                      <p>
                        LV= also had the highest score of 9.0 for
                        <strong>communication</strong> (tied with First
                        Central) because of long phone and webchat customer
                        service opening hours (26 hours per week), because you
                        can speak with a human right off the bat on their
                        webchat (instead of suffering through a chatbot) and
                        because the opening hours and phone numbers are easy
                        to find on their website.
                      </p>

                      <p>
                        LV= also scored the highest in terms of
                        <strong>support</strong>, by offering a 24/7 claims
                        line, solid cover for accommodation/transport after an
                        accident and lower levels of claims complaints.
                      </p>

                      <p>
                        The company didn't perform as well in the
                        <strong>flexibility</strong> category, because
                        motorists have less ability to customise their cover
                        (e.g. choosing a bare bones policy if they prefer, in
                        order to lower their premium) and also in the
                        <strong>finance</strong> category, primarily because
                        premium costs were on the higher side for our sample
                        driver and the company's solvency ratio (from their
                        Solvency and Financial Condition Report) is somewhat
                        low compared to other insurers.
                      </p>

                      <p>
                        <strong>Quick Takeaway:</strong> LV= is usually
                        moderately priced, so those looking for the cheapest
                        premium are likely to find a more suitable plan
                        elsewhere. But LV is a solid choice for those looking
                        for good features, communication and support, who
                        don't mind paying a bit more for this.
                        <a
                          class="ShortcodeLink--root"
                          title="LV= car insurance review"
                          href="https://www.nimblefins.co.uk/lv-car-insurance-review"
                          >Read our in-depth review here</a
                        >.
                      </p>

                      <h2 id="aviva">2. Aviva</h2>

                      <div>
                        <div class="scorecard">
                          <h2>Aviva</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/aviva-2"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 7.35
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">10</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5.5</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.8</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.6</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score green">7.5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9.1</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Aviva scored a mere 0.04 points behind LV= in the
                        NimbleFins Scoring System for car insurance, ranking a
                        solid #2. Like LV=, Aviva is particularly strong in
                        features, especially when you buy all of the add ons
                        (the <strong>dream</strong> score). And they offer
                        high cover for keys up to the vehicle value (this
                        could be useful given the high cost of replacing lost
                        or stolen keys) and unlimited days in the EU and
                        essentially unlimited cover (up to vehicle value) for
                        audio equipment. Plus you can get the highest personal
                        accident cover with Aviva, which is optional. Their
                        <strong>basic</strong> score is a bit lower than
                        LV='s, partly because a courtesy car for repairs is
                        not included as standard (but you can get it as an
                        optional add on).
                      </p>

                      <p>
                        The category in which Aviva is the weakest is
                        <strong>breakup</strong>, primarily because there is
                        only one way to cancel your car insurance (you fill in
                        a form online)—instead of being able to call or do via
                        webchat if you'd like a human to walk you through it.
                      </p>

                      <p>
                        Aviva scores well for <strong>popularity</strong>, now
                        the 3rd largest motor insurance company in the UK, and
                        you may recognise some of their 'budget' brands from
                        the comparison sites. Depending on where you live, you
                        may see their Quotemehappy.com (including the new
                        'Essentials' line) or General Accident brands with
                        some of the cheapest rates on offer on PCWs. Aviva
                        also support customers struggling with the high cost
                        of living, e.g. by offering payment deferrals and
                        lower cost, no-frills general insurance products.
                      </p>

                      <p>
                        Aviva won the Customer Care Award at the 2023 British
                        Insurance Awards. Customer service satisfaction is
                        high, with more than 50% of personal lines direct
                        customers holding more than one general insurance
                        product with Aviva.
                      </p>

                      <p>
                        Aviva has recently invested heavily in digital and
                        claims management, enabling UK motor customers to
                        start and complete their claims online with no
                        underwriter touch points. Customers seem happy with
                        online claims processing, as 80% book their car
                        repairs online. The Aviva Zero motor proposition
                        offers customers the opportunity to offset car
                        emissions and has sold over 500,000 policies since
                        launch in 2022.
                      </p>

                      <p>
                        <strong>Quick Takeaway:</strong> Depending on where
                        you live, an Aviva-branded policy might be quite
                        competitive. However if you’ve had an accident in the
                        past 5 years, our tests indicate you may receive a
                        less favorable price from Aviva than you'd find
                        elsewhere.
                        <a
                          class="ShortcodeLink--root"
                          title="Aviva car insurance review"
                          href="https://www.nimblefins.co.uk/aviva-car-insurance-review"
                          >Read our review</a
                        >.
                      </p>

                      <h2 id="admiral">3. Admiral</h2>

                      <div>
                        <div class="scorecard">
                          <h2>Admiral</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/admiral-2"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 7.02
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4.8</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5.5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">10</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9.5</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Admiral ranked #3 in the NimbleFins Scoring System for
                        car insurance, with particularly strong showings in
                        the <strong>popularity</strong> and
                        <strong>financial</strong> categories. Admiral is the
                        <a
                          class="ShortcodeLink--root"
                          title="Biggest UK car insurance companies"
                          href="https://www.nimblefins.co.uk/largest-car-insurance-companies"
                          >most popular car insurance company in the UK</a
                        >, having written the highest level of premiums for
                        every year we've tracked this metric. And the company
                        also has the highest Trustscore of the companies we've
                        studied here, at 4.5 out of 5 stars (tied with
                        Allianz). Perhaps these two metrics go hand in
                        hand—when customers are happy and rate a company well,
                        sales will naturally be higher. Especially if the
                        price is right...
                      </p>

                      <p>
                        Admiral's strong performance in the
                        <strong>financial</strong> category is due to
                        consistently offering really competitive premiums in
                        our test scenarios.
                      </p>

                      <p>
                        In the <strong>basic</strong> category, Admiral
                        doesn't do quite as well (e.g. their lowest Essential
                        tier doesn't cover windscreens, keys, driving others
                        cars, the same cover in the EU, personal belongings,
                        etc.), but we don't mind this too much—this really
                        stripped back policy might suit those who prioritise
                        paying a low premium for comprehensive cover. Their
                        dream score is not as high as LV= and Aviva because
                        you can't get a few niche features at Admiral, such as
                        mis-fueling cover and vandalism no claims protection.
                        But that's unlikely to affect most motorists.
                      </p>

                      <p>
                        The Admiral Group sells policies through their
                        <a
                          class="ShortcodeLink--root"
                          title="Admiral car insurance review"
                          href="https://www.nimblefins.co.uk/admiral-insurance-review#car"
                          >Admiral</a
                        >,
                        <a
                          class="ShortcodeLink--root"
                          title="Bell car insurance review"
                          href="https://www.nimblefins.co.uk/bell-car-insurance-review"
                          >Bell</a
                        >,
                        <a
                          class="ShortcodeLink--root"
                          title="Diamond car insurance review"
                          href="https://www.nimblefins.co.uk/diamond-car-insurance-review"
                          >Diamond</a
                        >,
                        <a
                          class="ShortcodeLink--root"
                          title="Elephant car insurance review"
                          href="https://www.nimblefins.co.uk/elephant-car-insurance-review"
                          >elephant.co.uk</a
                        >
                        and Gladiator brands. Admiral also writes the car
                        insurance for Ford-branded car insurance. Technically
                        speaking, Admiral is the trading name of EUI Limited.
                      </p>

                      <p>
                        <em
                          ><strong>Top tip:</strong> One of Admiral's stated
                          corporate goals is to increase customer retention,
                          which is good to know if your policy is up for
                          renewal.</em
                        >
                      </p>
                      <p>
                        <strong>Quick Takeaway:</strong> Admiral remains the
                        most popular car insurance company in the UK, with
                        policies that are usually quite quick and easy to
                        arrange online for a good price. Their brands can be
                        found on most price comparison sites, such as our
                        partner
                        <a
                          data-eventcategory="In text click to quote"
                          data-eventlabel="Compare Car Insurance"
                          class="ShortcodeLink--root js-event-click"
                          rel="nofollow"
                          title="QuoteZone"
                          href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                          >QuoteZone</a
                        >.
                        <a
                          class="ShortcodeLink--root"
                          title="Admiral car insurance review"
                          href="https://www.nimblefins.co.uk/admiral-insurance-review#car"
                          >Read our review</a
                        >.
                      </p>

                      <h2 id="directline">4. Direct Line</h2>

                      <div>
                        <div class="scorecard">
                          <h2>Direct Line</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/direct_line_logo"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 6.96
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.5</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">8.5</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.8</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Ranking #4 in the NimbleFins Scoring System for car
                        insurance, Direct Line showed strong, consistent
                        performance across the board. With a relatively new
                        Essentials tier, motorists now have more choice and
                        <strong>flexibility</strong> to design cover that
                        suits their needs. Those looking for core
                        comprehensive cover can opt for that lowest tier of
                        cover, which does well at the <strong>basics</strong>,
                        including features such as a courtesy car and
                        windscreen cover, and those looking for niche features
                        like mis-fueling can get more
                        <strong>dream</strong> features with the higher tier
                        offerings and add ons.
                      </p>

                      <p>
                        Direct Line scored really well in the
                        <strong>communication</strong> category, because they
                        have the most customer service open hours per week—28
                        hours for phone lines and 33 hours for webchat each
                        week. Plus their open hours and phone number are easy
                        to find on their website (this is not always the case
                        with other insurers).
                      </p>

                      <p>
                        The Direct Line Group sells Direct Line car insurance
                        directly to customers—you won't find the 'Direct Line'
                        brand on comparison sites, but you will find The
                        Direct Line Group's Churchill, Darwin and Privilege
                        motor insurance brands on comparison sites. (That
                        said, the company is apparently mulling whether or not
                        they should put the Direct Line brand on PCWs and will
                        announce their decision at their investor Capital
                        Markets Day in 2024!)
                      </p>

                      <p>
                        A bit over one third of the group's motor insurance
                        sales are through the Direct Line brand (38%), another
                        39% is via their 'budget' brands in the PCW channel
                        and 23% through partnerships. Broadly speaking, the
                        main 'Direct Line' brand does offer slightly better
                        features, such as a courtesy car in event of theft or
                        total loss (not just repairs after an accident), as
                        well as cheaper admin and cancellation fees, compared
                        to the PCW brands.
                      </p>

                      <p>
                        <strong>Quick Takeaway:</strong> Direct Line has made
                        a name as the insurance company that is not available
                        on comparison sites (although this could change in
                        2024!), but if you're looking to save more money on
                        your premium then their Churchill, Darwin or Privilege
                        brands might offer even lower rates through price
                        comparison websites.
                        <a
                          class="ShortcodeLink--root"
                          title="Direct Line car insurance review"
                          href="https://www.nimblefins.co.uk/direct-line-car-insurance-review"
                          >Read our review</a
                        >.
                      </p>

                      <h2 id="nfumutal">5. NFU Mutual</h2>

                      <div>
                        <div class="scorecard">
                          <h2>NFU Mutual</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/nfumutual-1"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 6.34
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">10</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4.8</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score green">8</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9.3</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        NFU Mutual may not be a name you're familiar with,
                        because they don't have a big online presence, but
                        their solid scores in a few categories have earned
                        them the 5th spot in the NimbleFins Scoring System for
                        car insurance. Most notable is NFU Mutual's strength
                        in the following categories:
                        <strong>basic</strong> (e.g. their core cover that
                        gives all policyholders a solid set of features),
                        <strong>support</strong> (e.g. a low 0-5% of claims
                        complaints as a % of claims) and
                        <strong>financial</strong> (e.g. our sample quote that
                        was surprisingly competitive; a strong solvency ratio
                        indicating financial health of the company).
                      </p>

                      <p>
                        One important point of note is that you cannot get a
                        quote from NFU Mutual online—only over the phone. This
                        may be a drawback or a strength for you. We tested out
                        getting a quote from NFU Mutual and were assisted by a
                        very kind and helpful woman who walked us through our
                        quote. It took a lot longer than getting an online
                        quote—24 minutes in total, and we didn't ask a lot of
                        questions so it could take a lot longer if you do have
                        questions. That said, the woman made a suggestion that
                        helped reduce the premium by over £100, and anyone
                        looking for a human touch and some guidance might
                        really like dealing with NFU Mutual.
                      </p>

                      <p>
                        Because of the lack of online provision (e.g. webchat,
                        an app, an online account), and because their phone
                        opening hours are on the short side, NFU Mutual
                        performed less impressively in the
                        <strong>communication</strong> category.
                      </p>

                      <p>
                        <strong>Quick takeaway:</strong> NFU Mutual can be a
                        good option to consider for those who are looking for
                        solid cover and helpful service, but who aren't in a
                        rush and don't mind the lack on online account or
                        quotes.
                        <a
                          class="ShortcodeLink--root"
                          title="NFU Mutual car insurance review"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/nfu-mutual-car-insurance-review"
                          >Read our in-depth review here</a
                        >.
                      </p>

                      <h2 id="central">6. 1st Central</h2>

                      <div>
                        <div class="scorecard">
                          <h2>1st Central</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/1st-central-1"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 6.08
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.8</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">8.5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.8</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.8</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Ranking #6 in the NimbleFins Scoring System, 1st
                        Central is a touch less consistent across the
                        categories than the higher-ranked companies, but they
                        show some real strengths. Particularly in the
                        <strong>communication</strong> and
                        <strong>support</strong> categories.
                      </p>

                      <p>
                        In terms of communication, where they scored 9 out of
                        10, it's pretty easy to get a hold of 1st Central,
                        with long opening hours (24 hours each week, including
                        4 hours on Sundays) for both phone lines and webchat.
                        Also, their webchat connects you with a human right
                        away (without needing to suffer through a chatbot
                        first). And their opening hours and number are easy to
                        find on their website.
                      </p>

                      <p>
                        In terms of support, where they scored 8.5 out of 10,
                        policyholders can benefit from a 24/7 claims line and
                        cover for transportation and/or accommodation that is
                        top notch (up to £500). Plus, they have a low 0-5%
                        claims complaint rate.
                      </p>

                      <p>
                        1st Central scores less impressively in the features
                        categories of <strong>basic</strong> and
                        <strong>dream</strong> because their lowest tier of
                        cover doesn't include windscreen cover, personal
                        accident, belongings, after-market audio equipment, an
                        uninsured driver guarantee, and more. But these
                        features are available if you step up in tier. But
                        without features like mis-fueling, higher personal
                        belongings cover and a lifetime repair guarantee, they
                        fall short on the <strong>dream</strong> score as
                        well.
                      </p>

                      <p>
                        Surprisingly to us, they were not as competitive with
                        their quote for our sample driver, but the excess was
                        nice and low, so it's always worth checking the quotes
                        for yourself. Also, note the £50 arrangement fee,
                        which is non-refundable. This contributed to a weaker
                        score in the <strong>financial</strong> category.
                      </p>

                      <p>
                        <strong>Quick Takeaway:</strong> Given the strong
                        communication and support ratings, it's worth checking
                        prices with 1st Central, which you can do with a
                        comparison site like our partner
                        <a
                          data-eventcategory="In text click to quote"
                          data-eventlabel="Compare Car Insurance"
                          class="ShortcodeLink--root js-event-click"
                          rel="nofollow"
                          title="QuoteZone"
                          href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                          >QuoteZone</a
                        >.
                        <a
                          class="ShortcodeLink--root"
                          title="1st Central car insurance review"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/1st-central-car-insurance-review"
                          >Or read our ind-depth review of 1st Central car
                          insurance</a
                        >.
                      </p>

                      <h2 id="hastings">7. Hastings Direct</h2>

                      <div>
                        <div class="scorecard">
                          <h2>Hastings</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/hastingsdirect-2"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 5.9
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">2.5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">8</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4.5</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4.9</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Ranking #7 in the NimbleFins Scoring System for car
                        insurance, Hastings Direct offer three different
                        policy types, so you can choose the car insurance
                        that’s right for you. Their lowest tier is pretty
                        stripped back, however, yielding a low 2.5 out of 10
                        score for our <strong>basic</strong> feature category.
                        For example, their lowest tier doesn't include cover
                        for hotel/transport after an accident, windscreen
                        cover, personal accident cover, and more. This policy
                        provided for pretty inexpensive rates for
                        comprehensive cover for our sample driver, however,
                        contributing to a strong 9.0 out of 10 score for the
                        <strong>financial</strong> category.
                      </p>

                      <p>
                        Their higher tier Direct and Premier policies are more
                        highly rated for features, contributing to a better
                        <strong>dream</strong> category score, and include:
                      </p>

                      <div class="row row-columns shortcodeList">
                        <div class="half column">
                          <ul class="list">
                            <li>Courtesy car</li>
                            <li>Windscreen cover</li>
                            <li>24/7 claims helpline</li>
                            <li>90 days of EU cover</li>
                            <li>Driving other cars</li>
                          </ul>
                        </div>
                        <div class="half column">
                          <ul class="list">
                            <li>Vandalism promise</li>
                            <li>Uninsured driver promise</li>
                            <li>Personal accident cover</li>
                            <li>Personal belongings cover</li>
                          </ul>
                        </div>
                      </div>

                      <p>
                        But even these higher tiers don't provide a lifetime
                        guarantee on repairs and their cover for
                        transport/accommodation after an accident is on the
                        low side (max £250). And their after-market audio
                        cover is a bit low (max £300).
                      </p>

                      <p>
                        But they also offer a range of optional extras, such
                        as enhanced personal accident cover, breakdown, motor
                        legal expenses and key protection (costs for these
                        vary but can be around £20 for legal and £35 for
                        breakdown, for example).
                      </p>

                      <p>
                        Finally, we like that Hastings Direct pride themselves
                        on simple and straightforward insurance. This shows in
                        their policy documents, which we think are easier to
                        understand than some other providers in the market.
                      </p>

                      <p>
                        <strong>Quick Takeaway:</strong> If you're after good
                        quality, affordable car insurance and don't need all
                        of the niche features/highest coverage levels, then
                        Hastings Direct is definitely a company to consider.
                        <a
                          class="ShortcodeLink--root"
                          title="Hastings Direct car insurance review"
                          href="https://www.nimblefins.co.uk/hastings-direct-insurance-review"
                          >Read our review</a
                        >.
                      </p>

                      <h2 id="axa">8. AXA</h2>

                      <div>
                        <div class="scorecard">
                          <h2>AXA</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/axa-3"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 5.73
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5.8</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.8</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.3</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.9</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        AXA earned the #8 spot in the NimbleFins Scoring
                        System v1.0 in June 2024, with consistent performance
                        across the categories, with no real positive or
                        negative stand out categories to report.
                      </p>

                      <p>
                        In the <strong>financial</strong> category, we were a
                        bit surprised by the relatively higher quote and
                        higher excess, compared to many of the other
                        companies. For example, AXA was £300 more expensive
                        than Admiral and while their policies differ, we would
                        have expected their premiums to be closer in cost.
                      </p>

                      <p>
                        In the <strong>support</strong> category, AXA shows
                        some weakness with a higher proportion of claims
                        complaints as a proportion of accounts. And their
                        cancellation fees are on the higher side, contributing
                        to a lower <strong>breakup</strong> score.
                      </p>

                      <p>
                        But they sell a lot of policies in the UK and report a
                        strong Trustscore, contributing to a good
                        <strong>popularity</strong> score.
                      </p>

                      <p>
                        AXA is one of the largest car insurance companies in
                        the UK. They sell policies under their own brand and
                        for brands owned by them, like Swiftcover, and they
                        also underwrite policies for a number of other brands
                        such as mypolicy.co.uk. So if you have bought car
                        insurance from a brand that doesn't underwrite their
                        own policies, the odds are high that your cover
                        ultimately lies with AXA.
                      </p>

                      <p>
                        A lot of features are optional/available for upgrade
                        with AXA, helping their
                        <strong>flexibility</strong> score—so be sure to
                        notice what you're signing up for. But the company has
                        some of the best personal belongings cover (up to
                        £1,500 is available!).
                      </p>

                      <p>
                        <strong>Quick Takeaway:</strong> AXA offers customers
                        the standard coverage and discounts that you’d expect
                        from a large international insurance company, and
                        their prices can be very competitive for some drivers.
                        They can be found on most price comparison sites,
                        including our partner
                        <a
                          data-eventcategory="In text click to quote"
                          data-eventlabel="Compare Car Insurance"
                          class="ShortcodeLink--root js-event-click"
                          rel="nofollow"
                          title="QuoteZone"
                          href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                          >QuoteZone</a
                        >.
                        <a
                          class="ShortcodeLink--root"
                          title="AXA car insurance review"
                          href="https://www.nimblefins.co.uk/largest-car-insurance-companies/axa-car-insurance-review"
                          >Read our review</a
                        >.
                      </p>

                      <h2 id="ageas">9. Ageas</h2>

                      <div>
                        <div class="scorecard">
                          <h2>Ageas</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/ageas-1"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 5.72
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.8</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.5</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">9.5</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">3.8</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">6.9</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Ageas ranked #9 overall, but it's certainly worth
                        mentioning their very high performance in the
                        <strong>support</strong> category (9.5 out of 10, tied
                        with LV=). Why? The company receives a low 0 - 5% of
                        complaints on claims, and a low proportion of claims
                        complaints as a proportion of accounts as well. Plus,
                        their provision for accommodation/transport after an
                        accident (up to £400) is close to the highest
                        available amongst the companies we studied (£500).
                      </p>

                      <p>
                        Their policy features are less exciting, with scores
                        of 5.0 out 10 for <strong>basic</strong> and
                        <strong>dream</strong> categories, because their
                        cheapest cover doesn't include features like
                        windscreen cover, key cover, personal belongings, etc.
                        And you're not able to get niche features like
                        mis-fueling or higher levels of cover for personal
                        belongings, after-market audio equipment, personal
                        accident or keys.
                      </p>

                      <p>
                        <strong>Quick takeaway:</strong> Ageas doesn't have
                        any glaring shortcomings, so one to consider for sure
                        if the price is right and you're happy with the
                        features offered.
                        <a
                          class="ShortcodeLink--root"
                          title="NimbleFins Ageas car insurance review"
                          href="https://www.nimblefins.co.uk/ageas-car-insurance-review"
                          >Read our review</a
                        >.
                      </p>

                      <h2 id="allianz">10. Allianz</h2>

                      <div>
                        <div class="scorecard">
                          <h2>Allianz</h2>
                          <img
                            class="logo-image-scorecard"
                            src="https://res.cloudinary.com/nimblefins/image/upload/c_fit,dpr_2.0,f_auto,h_1600,q_auto,w_200/v1/referral_logos/uk/insurance/allianz-1"
                            alt=""
                          />
                          <h3
                            style="
                              font-size: 2em;
                              color: #004b87;
                              margin-bottom: 10px;
                            "
                          >
                            Overall Score: 5.59
                          </h3>
                          <p>Tested With NimbleFins Scoring System</p>
                          <div class="scores">
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Basics</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How good are the features on their cheapest tier of cover?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=is%20version%201.0.-,Basics,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">7.5</div>
                              <div class="score-name">Dream</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="If you pay for their top tier of cover and all add ons, how do the set of features compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Dream,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4</div>
                              <div class="score-name">Flexibility</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="Can you customise and change your insurance policy to suit your needs?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=and%20audio%20cover.-,Flexibility,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">4.5</div>
                              <div class="score-name">Breakup</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How painful and costly is it to cancel your policy?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=weighted%20at%2040%25.-,Breakup,-Relationship%20speak%0AHow"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">1</div>
                              <div class="score-name">Communication</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How easy is it to contact customer service?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=app%20and%20webchat).-,Communication,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">8</div>
                              <div class="score-name">Support</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="What immediate support is provided after an accident, and how is the claims experience?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=through%20a%20chatbot.-,Support,-Relationship%20speak%0AWill"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">5</div>
                              <div class="score-name">Popularity</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How popular is the company with other motorists?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=claims%20complaints%20rates.-,Popularity,-Relationship%20speak%0ADo"
                                  >?</a
                                >
                              </div>
                            </div>
                            <div class="score-item">
                              <div class="score">8.9</div>
                              <div class="score-name">Financial</div>
                              <div
                                class="info-icon-scorecard"
                                data-info="How do premium costs and the ability to cover claims compare?"
                              >
                                <a
                                  href="https://www.nimblefins.co.uk/cheap-car-insurance#:~:text=customer%20review%20site.-,Financial,-Relationship%20speak%0AAre"
                                  >?</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <p><br /></p>
                      <p>
                        Allianz is a really big German multinational company
                        with 88 million customers in more than 70 countries,
                        who deliver a wide range of insurance and asset
                        management products. In the UK, Allianz has recently
                        rebranded (from Flow) to just 'Allianz'. They offer
                        one tier of car insurance, but it has lots of great
                        features (giving them a solid 7.5 out of 10 for the
                        <strong>basics</strong> category) and some add-ons are
                        available as well, such as legal cover and misfuelling
                        cover. In fact, checking the text of their policy
                        wording for the misfuelling cover gives a good
                        indication of the thoroughness of their cover. Some
                        companies that 'cover' misfuelling only cover damage,
                        not draining, but (like LV=), Allianz says they will:
                      </p>

                      <blockquote>
                        <p>
                          "... pay to drain and flush it and fix any engine
                          damage."
                        </p>
                      </blockquote>

                      <p>
                        They also include higher levels of key cover,
                        windscreen cover, a courtesy car for covered repairs,
                        a lifetime workmanship warranty for repairs, driving
                        other cars, new car replacement, onward travel/hotel
                        cover and more.
                      </p>

                      <p>
                        They ranked only 11th in terms of gross premiums
                        written last year, but their
                        <strong>popularity</strong> score is brought up by
                        really strong customer ratings on Trustpilot (4.5 out
                        of 5).
                      </p>

                      <p>
                        One potential issue is that Alliaz is online only,
                        which brings down their
                        <strong>communication</strong> score to a mere 1.0 out
                        of 10—customers cannot call customer service, nor is
                        there a webchat function. That said, we want to
                        mention that we emailed their customer service with a
                        question about their cover and they responded within
                        an hour, which is nicely responsive, in our opinion.
                      </p>

                      <p>
                        Offsetting this low category score, they scored really
                        well in the <strong>financial</strong> category,
                        primarily because they have been offering really
                        competitive premiums in our test cases.
                      </p>

                      <p><em>Note, Allianz now owns LV=.</em></p>
                      <p>
                        <strong>Quick takeaway:</strong> Allianz is a definite
                        contender for those who don't mind an online-only
                        company who are looking for a lower premium.
                        <a
                          class="ShortcodeLink--root"
                          title="Allianz car insurance review"
                          href="https://www.nimblefins.co.uk/cheap-car-insurance/allianz-car-insurance-review"
                          >Read our in-depth review of Allianz</a
                        >.
                      </p>

                      <script>
                        document.addEventListener(
                          "DOMContentLoaded",
                          function () {
                            const scores =
                              document.querySelectorAll(".score");

                            scores.forEach((scoreElement) => {
                              const score = parseFloat(
                                scoreElement.textContent
                              );
                              if (score >= 8) {
                                scoreElement.classList.add("green");
                              } else if (score >= 3 && score < 8) {
                                scoreElement.classList.add("yellow");
                              } else if (score >= 0 && score < 3) {
                                scoreElement.classList.add("red");
                              }
                            });
                          }
                        );
                      </script>

                      <p>
                        We are not recommending any one brand in particular
                        and these brands are certainly not guaranteed to give
                        you a cheap price and you may find cheaper or better,
                        more suitable cover elsewhere. Please just use the
                        information in this study to support you in learning
                        about the market. Remember to shop around for car
                        insurance, since some companies may be much more
                        affordable than others for your profile. Choosing the
                        best car insurance for your needs will depend on
                        factors like price points and car insurance features
                        you desire, such as breakdown, motor legal,
                        windscreen, repair guarantees or courtesy car cover.
                      </p>

                      <p>
                        In addition to the insurance providers listed above,
                        we also calculated figures for esure and Tesco Bank;
                        their overall scores of 5.05 and 4.94, respectively,
                        earned them #11 and #12 spots in the ranking.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-light">
              <div class="container clearfix back-light pad-none">
                <div class="container narrow">
                  <div class="flex">
                    <div class="full pad align-left clearfix">
                      <h2 id="system">NimbleFins Scoring System Explained</h2>

                      <p>
                        The NimbleFins Scoring System compares car insurance
                        providers based on objective data. Our 8 scoring
                        factors are equally weighted and our model is
                        standardized, which helps make our reviews easier to
                        understand. Our current scoring system is version 1.0.
                      </p>

                      <h3 class="align-center">Basics</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >Do they provide the bare basics of what you'd
                            look for in a partner?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >If you go for their cheapest policy, does it
                            offer a good set of features?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'basics' score reflects the core features included
                        as standard on a provider's lowest tier of cover,
                        without any add ons, and is based on 20 policy
                        features including: courtesy car, windscreen cover,
                        personal belongings, audio cover, EU cover, types of
                        customer service access, repair guarantee, 24/7 claims
                        line access and more. Some factors with varying levels
                        of coverage are weighted accordingly, such as key
                        cover, personal belongings, repair guarantee and audio
                        cover.
                      </p>

                      <h3 class="align-center">Dream</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >Do they offer all of the traits you've ever
                            dreamed of in your prince or princess
                            charming?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >If you want the highest coverage, can you get a
                            fully loaded policy with many features?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'dream package' score reflects the features
                        included as standard on a provider's highest tier of
                        cover, including optional add-ons, and is based on 20
                        policy features including: courtesy car, winscreen
                        cover, personal belongings, audio cover, EU cover,
                        types of customer service access, repair guarantee,
                        24/7 claims line access and more. Some factors with
                        varying levels of coverage are weighted accordingly,
                        such as key cover, personal belongings, repair
                        guarantee and audio cover.
                      </p>

                      <h3 class="align-center">Flexibility</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >Are they a flexible and adaptable partner who can
                            cater to your specific needs?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >Can you customise your insurance policy to
                            accommodate your needs? How costly is it to make a
                            change?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'flexibility' score reflects the ability to
                        customise policy features and coverage to suit an
                        individual's specific needs as well as the financial
                        burden of making changes to a policy (i.e. admin
                        fees). Customisability is weighted at 60% and admin
                        fees are weighted at 40%.
                      </p>

                      <h3 class="align-center">Breakup</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >How painful and costly would it be to break
                            up?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >What are their cancellation fees, and how easy is
                            it to cancel your policy - do you need to call or
                            can you cancel online?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'breakup' score assesses how difficult and costly
                        it is to cancel your car insurance policy. Factors
                        include cancellation fees and how many different ways
                        a policyholder can cancel their policy (i.e. phone,
                        account/app and/or webchat).
                      </p>

                      <h3 class="align-center">Communication</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >Do you they pick up the phone when you call? Is
                            it hard to find a time you're both available to
                            talk?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >Do they have phone customer service, or is it
                            online only? What are their customer service
                            hours?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'communication' score reflects how easy it is to
                        reach customer service and is based on 6 factors
                        including phone hours, webchat hours, easy of finding
                        opening hours, ease of finding a phone number, and if
                        you can reach a human on webchat without first
                        suffering through a chatbot.
                      </p>

                      <h3 class="align-center">Support</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >Will they come through when things go wrong? Are
                            they available 24/7 if you have a problem? What
                            are the odds they'll come through for you?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >Do they have a 24/7 claims line? What are their
                            claims complaint stats?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'support' score reflects the level of support in
                        case of a road traffic accident, and is based on 5
                        metrics covering 24/7 claims lines, provision of cover
                        for a hotel and/or transportation after an accident
                        and claims complaints rates.
                      </p>

                      <h3 class="align-center">Popularity</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em>Do your friends and family like them?</em>
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em>How do they rank in terms of popularity?</em>
                        </div>
                      </div>

                      <p>
                        Our 'popularity' score reflects how UK motorists
                        generally perceive a car insurance provider, and is
                        based on two primary metrics, which are equally
                        weighted: gross written premiums in the latest
                        financial year and customer ratings from a popular
                        customer review site.
                      </p>

                      <h3 class="align-center">Financial</h3>

                      <div class="full pad-none align-left clearfix">
                        <div class="half pad align-left clearfix">
                          <strong>Relationship speak</strong>
                          <br />
                          <em
                            >Are they financially stable? Are they good at
                            managing their finances? Will they be able to
                            contribute?</em
                          >
                        </div>
                        <div class="half pad align-left clearfix">
                          <strong>Insurance speak</strong>
                          <br />
                          <em
                            >How do premium and set-up costs compare? Is the
                            company financial stable? How many claims
                            complaints do they have?</em
                          >
                        </div>
                      </div>

                      <p>
                        Our 'financial' score assesses aspects of your
                        financial relationship such as premium costs and the
                        company's ability to cover claims (e.g. solvency
                        ratios from Solvency and Financial Condition Reports).
                        When gathering sample premiums to compare, we used a
                        50-year-old driver with a good driving history and a
                        new 2024 Ford Puma.
                      </p>

                      <div class="ReactComponent--root">
                        <div
                          class="js-react-component-rendered js-react-component-AffiliateQuoteForm"
                          data-component-name="AffiliateQuoteForm"
                        >
                          <div
                            class="AffiliateQuoteForm--root"
                            data-reactroot=""
                          >
                            <p class="AffiliateQuoteForm--title">
                              Get Car Insurance Quotes Now
                            </p>
                            <p class="AffiliateQuoteForm--description">
                              Quickly compare 100+ UK insurance providers.
                            </p>
                            <div class="AffiliateQuoteForm--form">
                              <div
                                class="AffiliateQuoteForm--select-container"
                              >
                                <div
                                  class="InputDropdown--root AffiliateQuoteForm--select group"
                                >
                                  <div
                                    class="InputDropdown--field back-white"
                                  >
                                    <select
                                      aria-label="selectedOption"
                                      class="InputDropdown--select select"
                                      name="selectedOption"
                                    >
                                      <option selected="selected" value="car">
                                        Car Insurance
                                      </option>
                                      <option value="home">
                                        Home Insurance
                                      </option>
                                      <option value="motorbike">
                                        Motorbike Insurance
                                      </option>
                                      <option value="pet">
                                        Pet Insurance
                                      </option>
                                      <option value="travel">
                                        Travel Insurance
                                      </option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="AffiliateQuoteForm--submit">
                                <a
                                  class="AffiliateQuoteForm--submit-button"
                                  href="https://quote.nimblefins.co.uk/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa"
                                  target="_blank"
                                  >Get Quotes</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="js-react-component"
                          data-component-name="AffiliateQuoteForm"
                        >
                          {"applyCallToAction":"Get
                          Quotes","defaultSelectedItem":"car","description":"Quickly
                          compare 100+ UK insurance
                          providers.","formType":"Insurance","onCurrent":true,"options":[{"label":"Car
                          Insurance","url":"https:\/\/quote.nimblefins.co.uk\/car-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa","value":"car"},{"label":"Home
                          Insurance","url":"https:\/\/quote.nimblefins.co.uk\/home-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa","value":"home"},{"label":"Motorbike
                          Insurance","url":"https:\/\/quote.nimblefins.co.uk\/bike-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa","value":"motorbike"},{"label":"Pet
                          Insurance","url":"https:\/\/quote.nimblefins.co.uk\/pet-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa","value":"pet"},{"label":"Travel
                          Insurance","url":"https:\/\/quote.nimblefins.co.uk\/travel-insurance?id=76f4ecd6e1ca7c2f442633593566fdaa","value":"travel"}],"title":"Get
                          Car Insurance Quotes Now"}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section content-row back-light">
              <div class="container clearfix back-white pad-none">
                <div class="container narrow">
                  <div class="flex">
                    <div class="full pad align-left clearfix">
                      <h2>Methodology</h2>

                      <p>
                        In order to come up with a list of top picks for best
                        and cheap UK car insurance, we first scoured rates
                        from a number of comparison sites to find car
                        insurance providers that were consistently among the
                        cheapest for our sample profiles. Then we ranked
                        companies on a combination of their TrustPilot or
                        Reviews.io customer ratings, the features available
                        (both on their most basic plan as well as their most
                        premium offering, with all options included), and
                        Fairer Finance scores to find which ones are best in
                        terms of features and customer service. In each column
                        (best basic policy, best all-in premium policy and
                        best policy overall), we gave the best policy a score
                        of 100%.
                      </p>

                      <p>
                        To come up with the data for our comparison charts, we
                        gathered hundreds of quotes. We started with a
                        45-year-old driver of a five-year-old Ford Fiesta
                        Zetec 999cc worth £7,000. The car is driven 6,800
                        miles each year and is parked on a private driveway.
                        The driver has 10 years of no claims. Then we varied
                        the quotes by age and driving history. We received
                        quotes if the driver had had at fault accident one
                        year ago, if they were caught speeding and got 3
                        points and a £100 fine one year ago, and for a drink
                        driving 36 mg conviction, with no fine and 3 points.
                      </p>

                      <p>
                        We took prices from two major comparison sites for
                        plans with comprehensive car insurance, including
                        windscreen and courtesy car cover. This meant that we
                        didn't always choose the cheapest offer from a
                        particular company. For example, Admiral and Hastings
                        both have an 'Essential' policy that is typically
                        cheaper but doen't include windscreen cover as
                        standard or an add-on feature, so we didn't use these
                        quotes. Instead, we used quotes for the 'Admiral' and
                        'Hastings Direct' policies.
                      </p>

                      <p>
                        Please remember that any prices shown in this article
                        are for educational use only are you are likely to
                        receive different quotes. Car insurance rates are
                        highly variable between one person and the next; and
                        even one person might get different quotes from a
                        company from one day to the next. Always compare
                        prices before buying to see how the market is rating
                        your risks at the time of purchase.
                      </p>

                      <p>
                        <strong>Note regarding savings figures:</strong> *For
                        information on the latest saving figures,
                        pay-less-than figures, and pay-from figures used for
                        promotional purposes, please
                        <a
                          class="ShortcodeLink--root"
                          title="Savings figures"
                          href="https://www.nimblefins.co.uk/savings-figures"
                          >click here</a
                        >.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

          <div class="NodeTypeStudy--comments">
            <h3 class="Node--comments">Comments</h3>
            <div id="commento"></div>
            <script src="https://cdn.commento.io/js/commento.js"></script>
          </div>
          <div class="ReactComponent--root">
            <div
              class="js-react-component-rendered js-react-component-ScrollToTop"
              data-component-name="ScrollToTop"
            >
              <a
                class="BackToTop--root NodeTypeStudy--scroll-to-top BackToTop--hidden"
                href="#top"
                data-reactroot=""
                >Back to Top</a
              >
            </div>

            <script
              type="application/json"
              class="js-react-component"
              data-component-name="ScrollToTop"
            >
              {
                "className": "NodeTypeStudy--scroll-to-top",
                "footerSelector": ".Footer--root"
              }
            </script>
          </div>
        </article>
      </div>
    </div>
  </div>


@endsection