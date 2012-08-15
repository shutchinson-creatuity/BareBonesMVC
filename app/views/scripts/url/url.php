<ul class="url">
    <li><span class="base_url"><span class="seperator">/</span></li>
    <?php foreach ($this->urlParams as $currentUrlParam): ?>
        <li><span class="url_var"><?php echo $currentUrlParam; ?></span><span class="seperator">/</span></li>
    <?php endforeach; ?>
</ul>
