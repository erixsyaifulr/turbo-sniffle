<div class="box">
<div class="box-header">
    <center><h3 class="box-title">Video</h3></center>
</div>
<div class="box-body">
<div class="row">
<?php
$alfabet = $this->db->query("SELECT * from tbl_video order by id desc")->result();
    foreach ($alfabet as $row) {

    ?>
    <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
        <video width="220" height="140" controls>
                                    <source src="<?= site_url('assets/uploads/video/'.$row->file);?>" type='video/mp4'>
                                    Your browser does not support the video tag.
                                </video>            
                <div class="card-body">
            <center><h5 class="card-title"><?= $row->judul_video ?></h5>
                <p class="card-text"><?= $row->keterangan ?></p>
                </center>
            </div>
        </div>
    </div>
        <?php
        }
?>
</div>
</div>
</div>

