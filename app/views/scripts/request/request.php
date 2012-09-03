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
    <h4>Uri:</h4>
</div>
<div class="request_data_container grid_9">
    <?php echo $this->path; ?>
</div>
<div class="request_data_header grid_3">
    <h4>URI Parameters:</h4>
</div>
<div class="request_data_container grid_9">
    <?php if (!empty($this->uriParams)): ?>
        <?php foreach ($this->uriParams as $key => $currentParam): ?>
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
