<div class="url_container">
    <ul class="url">
        <li><span class="base_url"><?php echo WEB_ROOT; ?></span><span class="seperator">/</span></li>
        <?php foreach ($this->urlVars as $currentUrlVar): ?>
            <li><span class="url_var"><?php echo $currentUrlVar; ?></span><span class="seperator">/</span></li>
        <?php endforeach; ?>
    </ul>
</div>
