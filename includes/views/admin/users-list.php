<?php
    $users = get_users();
?>
<div class="mt-8 text-secondary">
    <h1 class="mb-12 block font-bold text-2xl leading-tight text-black px-6"><?php echo __('Loyal points', 'wc-points-menagement'); ?></h1>
    <div class="flex flex-wrap">
        <div class="w-full md:w-7/12 px-6">
            <h2 class="mb-12 block font-bold text-xl leading-tight text-black"><?php echo __('Points list', 'wc-points-menagement'); ?></h2>
            <div class="bg-white shadow-lg rounded-lg p-8 text-base">
                <div class="group mb-8 relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                    </div>
                    <input type="search" id="default-search" class="block p-4 !pl-14 w-full text-black bg-gray-50 rounded-lg border-1 border-primary placeholder-gray-500 js-search" placeholder="<?php echo __('Search', 'wc-points-menagement')?>">
                </div>
                <div class="grid grid-cols-10 gap-x-4 w-full">
                    <div class="mb-4 col-span-3 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('Nip', 'wc-points-menagement'); ?></span></div>
                    <div class="mb-4 col-span-3 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('Email address', 'wc-points-menagement'); ?></span></div>
                    <div class="mb-4 col-span-3 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('Points count', 'wc-points-menagement'); ?></span></div>
                    <div class="mb-4 flex items-center bg-primary py-4 px-4 text-black rounded-lg"><span class="font-bold text-lg"><?php echo __('History', 'wc-points-menagement'); ?></span></div>
                </div>
                <div class="mt-4">
                    <?php foreach($users as $user) :
                        $points = (int)get_user_meta($user->ID, 'points')[0];
                        $nip    = get_user_meta($user->ID, 'nip')[0];
                    ?>
                    <div data-user="<?php echo $user->user_email.' '.$nip; ?>" class="mb-2 grid grid-cols-10 gap-x-4 w-full transitin-all duration-300 ease-in-out js-result">
                        <div class="col-span-3 flex items-center bg-gray-400 py-4 px-4 rounded-lg"><span><?php echo $nip; ?></span></div>
                        <div class="col-span-3 flex items-center bg-gray-400 py-4 px-4 rounded-lg"><span><?php echo $user->user_email; ?></span></div>
                        <div class="col-span-3 flex items-center bg-gray-400 py-4 px-4 rounded-lg"><span><?php echo $points; ?> pkt</span></div>
                        <div class="flex items-center justify-center bg-gray-400 py-4 px-4 rounded-lg">
                            <a href="<?php echo admin_url(sprintf(basename($_SERVER['REQUEST_URI']))).'&history='.$user->ID.'&name='.$user->display_name.'&nip='.$nip; ?>" >
                                <svg class="w-8 h-8 text-secondary hover:text-primary focus:text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C201.7 512 151.2 495 109.7 466.1C95.2 455.1 91.64 436 101.8 421.5C111.9 407 131.8 403.5 146.3 413.6C177.4 435.3 215.2 448 256 448C362 448 448 362 448 256C448 149.1 362 64 256 64C202.1 64 155 85.46 120.2 120.2L151 151C166.1 166.1 155.4 192 134.1 192H24C10.75 192 0 181.3 0 168V57.94C0 36.56 25.85 25.85 40.97 40.97L74.98 74.98C121.3 28.69 185.3 0 255.1 0L256 0zM256 128C269.3 128 280 138.7 280 152V246.1L344.1 311C354.3 320.4 354.3 335.6 344.1 344.1C335.6 354.3 320.4 354.3 311 344.1L239 272.1C234.5 268.5 232 262.4 232 256V152C232 138.7 242.7 128 256 128V128z"/></svg>
                            </a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="mt-12 md:mt-0 w-full md:w-5/12 px-6">
            <h2 class="mb-12 block font-bold text-xl leading-tight text-black"><?php echo __('Add / remove points', 'wc-points-menagement'); ?></h2>
            <form class="bg-white shadow-lg rounded-lg p-8 text-base" action="<?php echo admin_url(sprintf(basename($_SERVER['REQUEST_URI']))); ?>" method="post">
                <div class="mb-4">
                    <label for="user" class="block mb-2 font-medium"><?php echo __('User', 'wc-points-menagement'); ?></label>
                        <select id="user" name="user" class="border rounded-lg block w-full !max-w-full py-2 px-4 hover:!border-primary focus:!border-primary" required>
                        <option selected><?php echo __('Select user', 'wc-points-menagement'); ?></option>
                        <?php foreach($users as $user) : ?>                        
                            <option value="<?php echo $user->ID; ?>"><?php echo $user->display_name.' - '.$user->user_email; ?></option>
                       <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-6 flex">
                    <div class="flex items-center mr-4">
                        <input id="type-add" name="type" type="radio" value="1" class="text-primary bg-gray-100 border-gray-300 focus:ring-2" required />
                        <label for="type-add" class="ml-2"><?php echo __('Add', 'wc-points-menagement');?></label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="type-subtract" name="type" type="radio" value="0" class="text-primary bg-gray-100 border-gray-300 focus:ring-2" required />
                        <label for="type-subtract" class="ml-2 "><?php echo __('Subtract', 'wc-points-menagement');?></label>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="points" class="block mb-2 font-medium"><?php echo __('Points count', 'wc-points-menagement'); ?></label>
                    <input type="number" id="points" name="points" class="border rounded-lg block w-full py-2 px-4 hover:!border-primary focus:!border-primary" required />
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 font-medium"><?php echo __('Messasge', 'wc-points-menagement'); ?></label>
                    <textarea id="message" name="message" class="!min-h-60 border rounded-lg block w-full py-2 px-4 hover:!border-primary focus:!border-primary" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <input type="submit" name="assign-points" value="<?php  echo __('Assign points', 'wc-points-menagement');?>" class="!bg-primary hover:!bg-secondary text-secondary hover:text-white font-bold py-4 px-6 rounded-xl focus:outline-none focus:shadow-outline cursor-pointer" />
                </div>
            </form>
        </div>
    </div>
</div>
   