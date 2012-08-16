<div class="request_header grid_12">
    <h2>HTTP Request Debug</h2>
</div>
<div class="request_data_header grid_3">
    <h4>Base URL:</h4>
</div>
<div class="request_data_container grid_9">
    <p><?php echo $this->baseUrl; ?></p>
</div>
<div class="request_data_header grid_3">
    <h4>Path:</h4>
</div>
<div class="request_data_container grid_9">
    <?php echo $this->path; ?>
</div>
<div class="request_data_header grid_3">
    <h4>Active Node:</h4>
</div>
<div class="request_data_container grid_9">
    <?php if (!empty($this->urlParams)): ?>
        <p><?php echo end($this->urlParams); ?></p>
    <?php else: ?>
        <p>Home</p>
    <?php endif; ?>
</div>
<div class="request_data_header grid_3">
    <h4>GET Parameters:</h4>
</div>
<div class="request_data_container grid_9">
    <?php if (!empty($this->urlParams)): ?>
        <?php foreach ($this->urlParams as $key => $currentParam): ?>
            <p><em><?php echo $key; ?></em><span class="dash">-</span><?php echo $currentParam; ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        &#160;
    <?php endif; ?>
</div>
<div class="request_data_header grid_3">
    <h4>GET Parameter Count:</h4>
</div>
<div class="request_data_container grid_9">
    <p><?php echo count($this->urlParams); ?></p>
</div>
<div class="request_data_header grid_3">
    <h4>SERVER Parameters:</h4>
</div>
<div class="request_data_container grid_9">
    <p><em>Request URI</em><span class="dash">-</span><?php echo $_SERVER['REQUEST_URI']; ?></p>
    <?php if (empty($_SERVER['HTTPS'])): ?>
        <p><em>Protocol</em><span class="dash">-</span>HTTP</p>
    <?php else: ?>
        <p><em>Protocol</em><span class="dash">-</span>HTTPS</p>
    <?php endif; ?>
</div>
