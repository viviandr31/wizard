<?php
/**
 * Shortfreetext, textarea style, item Html
 *
 * @var $freeTextId                 answer{$ia[1]}
 * @var $extraclass
 * @var $labelText                  gT('Your answer')
 * @var $name                       $ia[1]
 * @var $drows
 * @var $tiwidth
 * @var $checkconditionFunction      $checkconditionFunction.'(this.value, this.name, this.type)
 * @var $dispVal
 */
?>

<!-- Short free text, textarea item -->
<?php if($withColumn): ?>
<div class='<?php echo $coreClass; ?> row'>
    <div class="<?php echo $extraclass; ?>">
<?php else: ?>
<div class='<?php echo $coreClass; ?> <?php echo $extraclass; ?>'>
<?php endif; ?>
        <?php if ($prefix !== '' || $suffix !== ''): ?>
            <div class="ls-input-group">
        <?php endif; ?>
            <!-- Prefix -->
            <?php if ($prefix !== ''): ?>
                <div class='ls-input-group-extra prefix-text prefix'><?php echo $prefix; ?></div>
            <?php endif; ?>

            <textarea
                class="form-control textarea <?php echo $kpclass; ?>"
                name="<?php echo $name;?>"
                id="<?php echo $freeTextId;?>"
                rows="<?php echo $drows; ?>"
                <?php echo ($inputsize ? 'cols="'.$inputsize.'"': '') ; ?>
                <?php echo ($maxlength ? 'maxlength='.$maxlength: ''); ?>
                aria-labelledby="ls-question-text-<?php echo $basename; ?>"
            ><?php echo $dispVal; ?></textarea>

            <!-- Suffix -->
            <?php if ($suffix !== ''): ?>
                <div class='ls-input-group-extra suffix-text suffix'><?php echo $suffix; ?></div>
            <?php endif; ?>
        <?php if ($prefix !== '' || $suffix !== ''): ?>
            </div>
        <?php endif; ?>
<?php if($withColumn): ?>
    </div>
</div>
<?php else: ?>
</div>
<?php endif; ?>
