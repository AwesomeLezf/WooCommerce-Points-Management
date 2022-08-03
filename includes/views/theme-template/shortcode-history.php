<?php
    if(sizeof($points_history) > 0 ){
?>
    <div class="mb-8 hidden md:grid grid-cols-6 gap-4 h-16">
        <div class="bg-primary rounded-md flex items-center px-6 py-2 sm:py-4 text-white text-xl font-bold"><span><?php echo __('Date', 'wc-points-menagement'); ?></span></div>
        <div class="bg-primary rounded-md flex items-center px-6 py-2 sm:py-4 text-white text-xl font-bold"><span><?php echo __('Points count', 'wc-points-menagement'); ?></span></div>
        <div class="col-span-4 bg-primary rounded-md flex items-center px-6 py-2 sm:py-4 text-white text-xl font-bold"><span><?php echo __('Message', 'wc-points-menagement'); ?></span></div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 sm:gap-4 mt-4 bg-[#FCFCFC] md:bg-transparent rounded-md py-2 sm:py-0">
    <?php
        foreach($points_history as $row) :
            if((int)$row->status === 1){
                $bg_color = 'bg-[#DFF2BF]';
                $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mr-4 w-8 h-8" fill="currentColor"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>';
            }
            else{
                $bg_color = 'bg-[#FFBABA]';
                $icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mr-4 w-8 h-8" fill="currentColor"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 288h-352c-17.69 0-32-14.32-32-32.01s14.31-31.99 32-31.99h352c17.69 0 32 14.3 32 31.99S417.7 288 400 288z"/></svg>';
            }
    ?>
        <div class="<?php echo $bg_color; ?> rounded-md flex flex-col px-6 py-2 sm:py-4">
            <div class="block md:hidden text-lg font-bold"><?php echo __('Date', 'wc-points-menagement'); ?></div>
            <span><?php echo date("d-m-Y H:i", strtotime($row->time)); ?></span>
        </div>
        <div class="<?php echo $bg_color; ?> bg-[#FCFCFC] rounded-md flex flex-col px-6 py-2 sm:py-4">
            <div class="block md:hidden text-lg font-bold"><?php echo __('Points count', 'wc-points-menagement'); ?></div>
            <span class="flex items-center">
                <?php
                    echo $icon;
                    echo $row->points;
                ?> pkt
            </span>
        </div>
        <div class="<?php echo $bg_color; ?> bg-[#FCFCFC] rounded-md flex flex-col md:col-span-4 px-6 py-2 sm:py-4">
            <div class="block md:hidden text-lg font-bold"><?php echo __('Message', 'wc-points-menagement'); ?></div>
            <p><?php echo $row->message; ?></p>
        </div>
    <?php
        endforeach
    ?>
    </div>
<?php
    }else{
?>
    <span class="text-black font-bold text-lg md:text-2xl"><?php echo __('Points history no found', 'wc-points-menagement'); ?></span>
<?php
    }
?>
	
