<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="main_wrapper">
      <div class="block">
        <div id="weather">
          <div class="weather_body">
            <div id="Temperature">Loading...</div>
            <div id="calender_icon">
              <div><i class="bi bi-calendar-fill"></i></div>
              <div id="date">Loading...</div>
              <div id="time">Loading...</div>
            </div>
            <div id="location_icon">
              <div><i class="bi bi-geo-alt-fill"></i></div>
              <div id="city">Loading...</div>
              <div id="country">Loading...</div>
            </div>
          </div>
        </div>
        <div class="analysis">
          <div class="chartBox">
            <canvas id="myChart" width="900" height="230"></canvas>
          </div>
          <div class="data_display">
            <div class="highlights">TODAY'S HIGHLIGHTS</div>
            <div class="boxes">
              <div class="row1">
                <div class="box1">
                  <div class="box1_content">Ph</div>
                  <div class="prog1">
                    <svg
                      class="progress-circle1"
                      width="130px"
                      height="130px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        class="progress-circle-back1"
                        cx="65"
                        cy="65"
                        r="58"
                      ></circle>
                      <circle
                        class="progress-circle-prog1"
                        cx="65"
                        cy="65"
                        r="58"
                      ></circle>
                    </svg>
                    <div class="prog1_value">0</div>
                  </div>
                </div>
                <div class="box2">
                  <div class="box2_content">TDS</div>
                  <div class="prog1">
                    <svg
                      class="progress-circle2"
                      width="130px"
                      height="130px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        class="progress-circle-back2"
                        cx="65"
                        cy="65"
                        r="58"
                      ></circle>
                      <circle
                        class="progress-circle-prog2"
                        cx="65"
                        cy="65"
                        r="58"
                      ></circle>
                    </svg>
                    <div class="prog2_value">0</div>
                  </div>
                </div>
                <div class="box3">
                  <div class="box3_content">Turbidity</div>
                  <div class="prog1">
                    <svg
                      class="progress-circle3"
                      width="130px"
                      height="130px"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        class="progress-circle-back3"
                        cx="65"
                        cy="65"
                        r="58"
                      ></circle>
                      <circle
                        class="progress-circle-prog3"
                        cx="65"
                        cy="65"
                        r="58"
                      ></circle>
                    </svg>
                    <div class="prog3_value">0</div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="box4">
                  <div class="box4_content">Water level</div>
                  <div class="meter">
                    <span class="meter_value" style="width: 0%"></span>
                  </div>
                  <div class="prog4_value">0%</div>
                </div>
                <div class="box5">
                  <div class="box5_content">Flow Rate</div>
                  <div class="box5_image">
                    <img src="images/flow_rate.jpg" alt="" />
                  </div>
                  <div class="prog5_value">
                    <span style="font-size: 10px">LPM</span>
                  </div>
                </div>
                <div class="box6">
                  <div class="box6_content">Water Quality</div>
                  <div class="box6_icon_text">
                    <div class="box6_image">
                      <img src="images/water_quality.jpg" alt="" />
                    </div>
                    <div class="prog6_value">70</div>
                  </div>
                  <div class="box6_desc">Suitable Water</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@next/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
  <script src="hg1.js"></script>
</html>
