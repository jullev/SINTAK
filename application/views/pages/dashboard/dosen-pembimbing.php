<?php 
    $this->load->view('pages/dashboard/alert');
?>
<div class="row">
<div class="col-md-3">
    <div class="card card-dashboard py-2">
        <div class="card-body">    
            <div class="row">
                <div class="col-md-7">
                    <h2 class="color-primary font-weight-bold"><?= $menungguRevisi ?></h2>
                    Bimbingan Menunggu Revisi
                </div>
                <div class="col-md-5 text-center">
                    <span class="fa fa-marker fa-4x"></span>
                </div>
            </div>
            <hr>
            <a href="">Lihat Detail</a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card card-dashboard py-2">
        <div class="card-body">    
            <div class="row">
                <div class="col-md-7">
                    <h2 class="color-primary font-weight-bold"><?= $pengajuan ?></h2>
                    Pengajuan Judul
                </div>
                <div class="col-md-5 text-center">
                    <span class="fa fa-envelope-open-text fa-4x"></span>
                </div>
            </div>
            <hr>
            <a href="">Lihat Detail</a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card card-dashboard py-2">
        <div class="card-body">    
            <div class="row">
                <div class="col-md-7">
                    <h2 class="color-primary font-weight-bold"><?= $ta ?></h2>
                    Mhs Bimbingan
                </div>
                <div class="col-md-5 text-center">
                    <span class="fa fa-users fa-4x"></span>
                </div>
            </div>
            <hr>
            <a href="">Lihat Detail</a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card card-dashboard py-2">
        <div class="card-body">    
            <div class="row">
                <div class="col-md-7">
                    <h2 class="color-primary font-weight-bold"><?= $bimbingan ?>x</h2>
                    Bimbingan
                </div>
                <div class="col-md-5 text-center">
                    <span class="fa fa-chalkboard-teacher fa-4x"></span>
                </div>
            </div>
            <hr>
            <a href="">Lihat Detail</a>
        </div>
    </div>
</div>
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card card-dashboard">
            <div class="card-header">
                Persentase Mahasiswa Bimbingan
            </div>
            <div class="card-body">    
                <canvas id="myChart" width="100%" height="70px"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo assetUrl() ?>vendor/chart.js/Chart.bundle.min.js"></script>

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>    
