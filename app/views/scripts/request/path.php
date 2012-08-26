<div class="path">
    <div class="param"><span class="seperator">/</span></div>
    <?php foreach ($this->uriParams as $currentUriParam): ?>
        <?php if (!empty($currentUriParam)): ?>
            <div class="param"><?php echo $currentUriParam; ?><span class="seperator">/</span></div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
