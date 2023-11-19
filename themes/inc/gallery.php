<?php
$gallery = array('orderBy' => 'dragSortOrder ASC');
$gallery = global_gallery::get_data($gallery);
?>

<section class="gallery bg-dark py-5 py-lg-9">
    <div class="gallery-slider">
        <?php foreach ($gallery as $val) : ?>
            <div class="item">
                <?= _imgSrc($val, 'image') ?>
                <?php if (isset($val['slug'])) : ?>
                    <a href="<?= _isset($val, 'slug') ?>" class="btn btn-white linkBtn rounded-pill fw-800 px-4"><span class="pe-2"> See More</span> <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4062 8.99622L8.10324 2.69321L1.80023 8.99621" stroke="#00AEEF" stroke-width="3.0125" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>