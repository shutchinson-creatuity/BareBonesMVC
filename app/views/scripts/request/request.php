<div class="grid_12">
    <h2>HTTP Request Debug</h2><br>
</div>
<div class="router_data_header grid_3">
    <h4>Base URL:</h4>
</div>
<div class="router_data_container grid_9">
    <p><?php echo $this->baseUrl; ?></p>
</div>
<div class="router_data_header grid_3">
    <h4>Path:</h4>
</div>
<div class="router_data_container grid_9">
    <?php echo $this->path; ?>
</div>
<div class="router_data_header grid_3">
    <h4>URL Parameter Count:</h4>
</div>
<div class="router_data_container grid_9">
    <p><?php echo count($this->urlParams); ?></p>
</div>
<div class="router_data_header grid_3">
    <h4>Active Page:</h4>
</div>
<div class="router_data_container grid_9">
    <p><?php echo end($this->urlParams); ?></p>
</div>
<div class="router_data_header grid_3">
    <h4>URL GET Parameters</h4>
</div>
<div class="router_data_container grid_9">
    <p><?php echo end($this->urlParams); ?></p>
</div>
