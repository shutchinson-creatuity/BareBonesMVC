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
    <h4>URL Nodes:</h4>
</div>
<div class="request_data_container grid_9">
    <?php if (!empty($this->urlParams)): ?>
        <?php foreach ($this->urlParams as $key => $currentParam): ?>
            <p><em><?php echo $key; ?></em><span class="dash">&#8211;</span><?php echo $currentParam; ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        &#160;
    <?php endif; ?>
</div>
<div class="request_data_header grid_3">
    <h4>GET Parameters:</h4>
</div>
<div class="request_data_container grid_9">
    <?php if (!empty($this->getParams)): ?>
        <?php foreach ($this->getParams as $key => $currentParam): ?>
            <p><em><?php echo $key; ?></em><span class="dash">&#8211;</span><?php echo $currentParam; ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        &#160;
    <?php endif; ?>
</div>
<div class="request_data_header grid_3">
    <h4>SERVER Parameters:</h4>
</div>
<div class="request_data_container grid_9">
    <?php if (!empty($this->serverParams)): ?>
        <?php foreach ($this->serverParams as $key => $currentParam): ?>
            <?php if (strcmp($key, 'SERVER_SIGNATURE') !== 0): ?>
                <p><em><?php echo $key; ?></em><span class="dash">&#8211;</span><?php echo $currentParam; ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        &#160;
    <?php endif; ?>
</div>
