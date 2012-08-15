<div class="grid_12">
    <h2>Router Debug</h2><br>
</div>
<div class="router_data_header grid_3">
    <h4>Path:</h4>    
</div>
<div class="router_data_container grid_9">
    <?php echo $this->path; ?>
</div>
<div class="router_data_header grid_3">
    <h4>Active Page:</h4>
</div>
<div class="router_data_container grid_9">
    <p><?php echo end($this->urlParams); ?></p>    
</div>
<div class="router_data_header grid_3">
    <h4>URL Variable Count:</h4>
</div>
<div class="router_data_container grid_9">
    <p><?php echo count($this->urlParams); ?></p>
</div>
