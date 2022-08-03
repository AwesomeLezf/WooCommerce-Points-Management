<div class="mt-8 text-secondary">
    <h1 class="mb-12 block font-bold text-2xl leading-tight text-black px-6"><?php echo __('Loyal points', 'wc-points-menagement'); ?></h1>
    <div class="w-full px-6">
        <h2 class="mb-12 block font-bold text-xl leading-tight text-black"><?php echo __('Points history', 'wc-points-menagement'); ?><span class="text-primary"> <?php echo $_GET['name']; ?></span> - <?php echo "Nip: ".$_GET['nip']; ?></h2>
        <?php if(sizeof($history) === 0) echo __('Points history no found', 'wc-points-menagement'); else { ?>
            <div class="bg-white shadow-lg rounded-lg p-8 text-base">                     
                <div class="grid grid-cols-6 gap-x-4 gap-y-2 w-full">
                    <div class="mb-4 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('Date', 'wc-points-menagement'); ?></span></div>
                    <div class="mb-4 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('Points count', 'wc-points-menagement'); ?></span></div>
                    <div class="mb-4 col-span-4 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('Message', 'wc-points-menagement'); ?></span></div>
                    <?php foreach($history as $row) : $status = (int)$row->status; ?>
                        <div class="flex items-center py-4 px-4 rounded-lg <?php if($status === 0) echo 'bg-error-100'; else echo 'bg-success-100'; ?>">
                            <span><?php echo date("d-m-Y H:i", strtotime($row->time)); ?></span>
                        </div>
                        <div class="flex items-center py-4 px-8 rounded-lg <?php if($status === 0) echo 'bg-error-100'; else echo 'bg-success-100'; ?>">
                            <?php if($status === 1) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" mr-4 w-8 h-8" fill="currentColor"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"/></svg>
                            <?php else : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" mr-4 w-8 h-8" fill="currentColor"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 288h-352c-17.69 0-32-14.32-32-32.01s14.31-31.99 32-31.99h352c17.69 0 32 14.3 32 31.99S417.7 288 400 288z"/></svg>
                            <?php endif; ?>
                            <span><?php echo $row->points; ?> pkt</span>
                        </div>
                        <div class="col-span-4 flex py-4 px-8 rounded-lg <?php if($status == 0) echo 'bg-error-100'; else echo 'bg-success-100'; ?>">
                            <p class="text-base"><?php echo $row->message; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>    
            </div>
        <?php }  ?>
    </div>
</div>