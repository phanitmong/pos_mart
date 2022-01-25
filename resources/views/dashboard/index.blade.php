@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="container">
                <section class="column">
                  <div class="column-item">
                    <!-- Line Chart -->
                    <canvas class="charts" id="report"></canvas>
                  </div>

                </section>
              </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $('#dashboard_menu').addClass('active');
    });
</script>
<script>
    const reportData = {
      labels: [
        @for($i=1;$i<30;$i++)
            {{$i}},
        @endfor

      ],
      datasets: [
          {
              label: "ចំណូលប្រចាំថ្ងៃ",
              data: [ @for($i=1;$i<30;$i++)
                {{$i}},
                @endfor],
              tension: 0.3,
              fill: true,
              lineTension: 0,
              borderWidth: 2,
              borderColor: "rgba(153 ,204 ,153 ,0.9)",
              backgroundColor: "rgba(153 ,204 ,153 ,0.8)",
              pointBorderColor: "rgba(153 ,204 ,153 ,1)",
              // pointBackgroundColor: "rgba(48, 156, 229, 1)"
          }
      ]
  };

  // Report Chart Plugin
  const reportPlugin = {
      title: {
          display: false,
          position: "top",
          align: "start",
          text: " Data Report",
          color: "rgba(23, 23, 23, 1)",
          font: {
              family: "Roboto",
              size: 21,
              style: "normal",
              weight: "bold",
              lineHeight: 1.25
          },
          padding: {
              bottom: 20
          }
      },
      legend: {
          display: false,
          position: "top",
          align: "center",
          maxWidth: 20,
          labels: {
              font: {
                  family: "Roboto",
                  size: 13,
                  style: "normal",
                  weight: "normal",
                  lineHeight: 1.25,
                  textAlign: "center",
                  usePointStyle: false
              }
          }
      },
      tooltip: {
          enabled: true,
          mode: "index",
          intersect: false,
          position: "nearest",
          usePointStyle: false,
          titleFont: "Roboto",
          titleAlign: "left",
          titleSpacing: 3,
          padding: 10
      }
  };

  // Report Chart Option
  const reportOption = {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 2.5,
      plugins: reportPlugin,
      scales: {
          x: {
              display: true,

              grid: {
                  display: false
              },

              title: {
                  display: false,
                  text: "Month",
                  color: "rgba(23, 23, 23, 1)",
                  font: {
                      family: "Roboto",
                      size: 16,
                      weight: "bold",
                      lineHeight: 1.5
                  },
                  padding: {
                      top: 20
                  }
              }
          },
          y: {
              display: true,

              beginAtZero: true,
              grid: {
                  display: true
              },

              title: {
                  display: false,
                  text: "Value",
                  color: "rgba(23, 23, 23, 1)",
                  font: {
                      family: "Roboto",
                      size: 16,
                      weight: "bold",
                      lineHeight: 1.5
                  }
              }
          }
      },
      interaction: {
          mode: "index",
          intersect: false
      },
      animation: {
          x: {
              duration: 3000,
              from: 0
          },
          y: {
              duration: 1500,
              from: 500
          }
      }
  };

  // Report Chart Config
  let reportChart = document.getElementById("report");
  const lineChart = new Chart(reportChart, {
      type: "line",
      data: reportData,
      options: reportOption
  });

  //--------------------------------------------------------------------------
  // Doughnut Chart Configuration




  </script>
@endsection
