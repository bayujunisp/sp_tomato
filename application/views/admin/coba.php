<!-- 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>


  <title>Paud Ceria</title>
</head>
<body>

<script type="text/javascript">
      $(document).ready(function(){

        $.ajaxSetup({
          type:"POST",
          url: "<?php echo base_url('admin/ambil_data')?>",
          cache: false,
        });

        $("#kecamatan").change(function(){

          var value = $(this).val();
          if(value != 'pilih'){
            $.ajax({
              data:{modul:'kelurahan',id:value},
              success: function(respond){
                $("#kelurahan").html(respond);
              }
            })
          }

        });

        });
      </script>

  <div class="form-group">
              <label for="email">Kecamatan:</label>
              <select class="form-control" name="kecamatan" id="kecamatan">
                <option value="0">Pilih Kecamatan</option>
                <?php

                foreach ($kecamatan as $data) {

                  ?>
                  <option value="<?= $data['kecamatan']; ?>"><?= $data['kecamatan']; ?></option>
                  <?php } ?>
                </select>

              </div>

              <div class="form-group">
                <label for="email">Kelurahan:</label>
                <select class="form-control" name="kelurahan" id="kelurahan">
                  <option value="0">Pilih Kelurahan</option>
                </select>

              </div>

  </body>
  </html> -->

  <!DOCTYPE html>
<html>
<head>
  <title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS - www.malasngoding.com</title>
 
<!-- ChartJS -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
</head>
<body>
  <style type="text/css">
  body{
    font-family: roboto;
  }

  table{
    margin: 0px auto;
  }
  </style>


  <center>
    <h2>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS<br/>- www.malasngoding.com -</h2>
  </center>



  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
  </div>

  <br/>
  <br/>



  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Bogor Utara", "Bogor Selatan"],
        datasets: [{
          label: '',
          data: [
          <?php 
          echo $tanah_sareal;
          ?>, 
           <?php 
          echo $bogor_utara;
          ?>, 
           <?php 
          echo $bogor_timur;
          ?>, 
           <?php 
          echo $bogor_selatan;
          ?>, 
           <?php 
          echo $bogor_barat;
          ?>, 
           <?php 
          echo $bogor_tengah;
          ?> 
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
</body>
</html>