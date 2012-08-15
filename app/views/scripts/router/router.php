<div class="grid_12">
    <h3>Router Debug</h3><br>
</div>
<div class="router_data_header grid_3">Path</div>
<div class="router_data_container grid_9">
    <?php echo $this->path; ?>
</div>
<div class="router_data_header grid_3">URL Parameter Count</div>
<div class="router_data_container grid_9">
    <p><?php echo count($this->urlParams); ?></p>
</div>
<div class="router_data_header grid_3">Active Page</div>
<div class="router_data_container grid_9">
    <p><?php echo end($this->urlParams); ?></p>
</div>
