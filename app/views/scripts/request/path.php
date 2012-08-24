<div class="path">
    <div class="param"><span class="seperator">/</span></div>
    <?php foreach ($this->getParams as $currentUrlParam): ?>
        <?php if (!empty($currentUrlParam)): ?>
            <div class="param"><?php echo $currentUrlParam; ?><span class="seperator">/</span></div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
