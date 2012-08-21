<ul class="url">
    <li><span class="base_url"><span class="seperator">/</span></li>
    <?php foreach ($this->getParams as $currentUrlParam): ?>
        <?php if (!empty($currentUrlParam)): ?>
            <li><span class="url_var"><?php echo $currentUrlParam; ?></span><span class="seperator">/</span></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
