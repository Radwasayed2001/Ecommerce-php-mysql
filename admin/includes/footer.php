<footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12 mb-lg-0 mb-4">
              
            </div>
            <div class="col-lg-12">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">Services</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </main>
  
  <!--   Core JS Files   -->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/jquery-3.6.0.min.js"></script>
  <script src="assets/js/core/bootstrap.bundle.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/custom.js"></script>
  
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


  <script>
    <?php
    if (isset($_SESSION['message'])){
      ?>
      alertify.set('notifier','position', 'top-right');
      alertify.success("<?= $_SESSION['message'] ?>");
      <?php
      unset($_SESSION['message']);
    }
    ?>
  </script>
</body>

</html>