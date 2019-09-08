<?php
    /**
     * @author Anastasia Sidak <m0st1ce.nastya@gmail.com>
     *
     * @link https://steamcommunity.com/profiles/76561198038416053
     * @link https://github.com/M0st1ce
     *
     * @license GNU General Public License Version 3
     */

    /*
     * In your head, in your head
     * Zombie, zombie, zombie
     * What's in your head, in your head
     * Zombie, zombie, zombie?
     */
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header-profile">
                <div class="card-header">
                <h5 class="badge"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Player_profile')?> :: <?php echo action_text_trim( $Player->get_name(),16 )?></h5>
                    <div class="select-panel select-panel-table badge">
                        <select onChange="window.location.href=this.value">
                            <option style="display:none" value="" disabled selected><?php echo $Player->found[  $Player->server_group  ]['name_servers']?></option>
                            <?php for ($b = 0, $_c = sizeof( $Player->found );$b < $_c;$b++) { if($Player->found_fix[$b] != ''){ ?>
                                <option value="<?php echo set_url_section( get_url( 2 ), 'server_group', $Player->found_fix[$b]['server_group'] )?>">
                                    <a href="<?php echo set_url_section( get_url( 2 ), 'server_group', $Player->found_fix[$b]['server_group'] )?>"><?php echo $Player->found_fix[$b]['name_servers']?></a></option>
                            <?php }} ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
            <div class="left-block">
                <div class="profile__block">
                <div class="user-block">
                    <div class="block">
                    <?php $General->get_js_relevance_avatar( $Player->get_steam_32(), 1 )?>
                    <a href="<?php $Player->found[  $Player->server_group  ]['steam'] == 1 && print 'https://steamcommunity.com/profiles/' . con_steam32to64( $Player->get_steam_32() )?>" target="_blank"><img id="<?php $General->arr_general['avatars'] == 1 && print con_steam32to64(  $Player->get_steam_32()  )?>"class="rounded-circle avatar" data-src="<?php echo $General->getAvatar( con_steam32to64( $Player->get_steam_32()  ), 1)?>"></a>
                    <div class="name"><?php echo action_text_clear( action_text_trim( $Player->get_name(), 17 ) )?></div>
                    <div class="country">-</div>
                    <img class="rank-img" src="storage/cache/img/ranks/<?php echo $Player->found[  $Player->server_group  ]['ranks_pack'] . '/' . $Player->get_rank()?>.png">
                    <div class="rank"><?php echo $Modules->get_translate_phrase( $Player->get_rank(), 'ranks_' . $Player->found[  $Player->server_group  ]['ranks_pack'] )?></div>
                    <div class="user-stats"><?php echo $Modules->get_translate_phrase('_Player')?></div>
                    </div>
                </div>
                <div class="best-weapon-block">
                    <div class="block">
                    <ul class="weapons">
                        <?php for ( $i = 0; $i < 3; $i++ ):?>
                        <li>
                            <?php $General->get_icon('custom', $Player->top_weapons[ $i ]['name'], 'weapons')?>
                            <div class="kills"><span><?php echo $Player->top_weapons[ $i ]['kills']?></span></div>
                        </li>
                        <?php endfor; ?>
                    </ul>
                    <div class="weapon-table">
                    <table class="table table-hover fixed_header">
                        <thead>
                        <tr>
                            <th class="text-right"></th>
                            <th class="text-left"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Weapon')?></th>
                            <th class="text-center"><?php echo $Modules->get_translate_phrase('_Kills')?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $weapon_names = array_keys( $Player->weapons );$_c = count( $Player->weapons );for ($w = 0; $w < $_c; $w++) {?>
                            <tr>
                                <th class="text-right"><?php $General->get_icon( 'custom', $weapon_names[$w], 'weapons' )?></th>
                                <th class="text-left"><?php echo str_replace('_',' ',strtoupper(str_replace('weapon_','',$weapon_names[$w])))?></th>
                                <th class="text-center"><?php echo $Player->weapons[$weapon_names[$w]] ?> kills</th>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                        </div>
                </div>
                </div>
                </div>
                <div class="profile__block">
                <div class="short-stats-block">
                    <div class="block">
                    <div class="left-stats-block">
                        <ul>
                            <li><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Total_winning_percentage')?></li>
                            <li><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Ratio_KD')?></li>
                            <li><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Ratio_SH')?></li>
                            <li><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Game_time')?></li>
                            <li><?php echo $Modules->get_translate_phrase('_Headshot')?>:</li>
                        </ul>
                    </div>
                    <div class="right-stats-block">
                        <ul>
                            <li><span><?php echo $Player->get_percent_win()?></span></li>
                            <li><span><?php echo $Player->get_kd()?></span></li>
                            <li><span><?php echo $Player->get_percent_hits()?></span></li>
                            <li><span><?php echo $Player->get_playtime()?> <?php echo $Modules->get_translate_phrase('_Hour')?></span></li>
                            <li><span><?php echo $Player->get_percent_headshots()?></span></li>
                        </ul>
                    </div>
                    <div class="skull-block">
                        <div class="left-skull-block">
                            <div class="skull"></div>
                            <div class="info"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Triple_Kills')?> <span></span>-</div>
                        </div>
                        <div class="center-skull-block">
                            <div class="skull"></div>
                            <div class="info"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Quad_kills')?> <span></span>-</div>
                        </div>
                        <div class="right-skull-block">
                            <div class="skull"></div>
                            <div class="info"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Ace')?> <span></span>-</div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                <div class="middle-block">
                    <div class="profile__block">
                    <div class="best-maps">
                        <div class="block">
                        <div class="map-top">
                            <img src="storage/cache/img/maps/<?php echo $Player->found[ $Player->server_group ]['mod']?>/de_mirage.jpg">
                            <div class="map-lower">
                                <div class="map-one"><span>1</span></div>
                                <div class="map-pretty-name"><span>MIRAGE</span></div>
                                <div class="map-title-rounds">- <i class="icon"><?php $General->get_icon( 'custom', 'cup', 'global' )?></i></div>
                            </div>
                        </div>
                            <div class="map-bottom">
                                <div class="weapon-table">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-right"></th>
                                            <th class="text-left"><?php echo $Modules->get_translate_phrase('_Map')?></th>
                                            <th class="text-center"><?php echo $Modules->get_translate_phrase('_Wins')?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_dust2.png"></th>
                                                <th class="text-left">de_dust2</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_cache.png"></th>
                                                <th class="text-left">de_cache</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_inferno.png"></th>
                                                <th class="text-left">de_inferno</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_nuke.png"></th>
                                                <th class="text-left">de_nuke</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_cbble.png"></th>
                                                <th class="text-left">de_cbble</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_overpass.png"></th>
                                                <th class="text-left">de_overpass</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                            <tr>
                                                <th class="text-right"><img src="./storage/cache/img/pins/maps/_de_train.png"></th>
                                                <th class="text-left">de_train</th>
                                                <th class="text-center">-</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                    </div>
                        <div class="hitstats-block">
                            <div class="block">
                                <img class="back" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/back' ?>.jpg">
                                <div class="hit_player">
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inhead')?>: <?php echo $Player->get_hits_head()?>"><img class="hit_head" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/head' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inneak')?>: <?php echo $Player->get_hits_neak()?>"><img class="hit_neak" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/neak' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inleftarm')?>: <?php echo $Player->get_hits_leftarm()?>"><img class="hit_left_arm" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/left_arm' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inrightarm')?>: <?php echo $Player->get_hits_rightarm()?>"><img class="hit_right_arm" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/right_arm' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inleftleg')?>: <?php echo $Player->get_hits_leftleg()?>"><img class="hit_left_leg" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/left_leg' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inrightleg')?>: <?php echo $Player->get_hits_rightleg()?>"><img class="hit_right_leg" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/right_leg' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inbelly')?>: <?php echo $Player->get_hits_belly()?>"><img class="hit_belly" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/belly' ?>.png"></a>
                                    <a class="tooltip-top" data-tooltip="<?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Hit_inchest')?>: <?php echo $Player->get_hits_chest()?>"><img class="hit_chest" ondrag="return false" ondragstart="return false" src="<?php echo CACHE . 'img/hitstats/chest' ?>.png"></a>
                                </div>
                        </div>
                    </div>
                </div>
                    <?php if( $Player->unusualkills != false ):?>
                    <div class="profile__block">
                            <div class="unusualkills_block_left">
                                <div class="block">
                                    <div class="unusualkills_score"><?php echo $Player->get_unusualkills_op()?></div>
                                    <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_First_round_kills')?></div>
                                    <div class="icon_block">
                                        <i class="zmdi zmdi-fire zmdi-hc-fw"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="unusualkills_block">
                                <div class="block">
                                    <div class="unusualkills_score"><?php echo $Player->get_unusualkills_penetrated()?></div>
                                    <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Penetrated_kills')?></div>
                                    <div class="icon_block">
                                        <i class="zmdi zmdi-flash zmdi-hc-fw"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="unusualkills_block">
                                <div class="block">
                                    <div class="unusualkills_score"><?php echo $Player->get_unusualkills_noscope()?></div>
                                    <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Killing_without_scope')?></div>
                                    <div class="icon_block">
                                        <i class="zmdi zmdi-circle-o zmdi-hc-fw"></i>
                                    </div>
                                </div>
                            </div>
                        <div class="unusualkills_block_left">
                            <div class="block">
                                <div class="unusualkills_score"><?php echo $Player->get_unusualkills_run()?></div>
                                <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Kills_on_run')?></div>
                                <div class="icon_block">
                                    <i class="zmdi zmdi-run zmdi-hc-fw"></i>
                                </div>
                            </div>
                        </div>
                        <div class="unusualkills_block">
                            <div class="block">
                                <div class="unusualkills_score"><?php echo $Player->get_unusualkills_flash()?></div>
                                <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Kills_flash')?></div>
                                <div class="icon_block">
                                    <i class="zmdi zmdi-eye-off zmdi-hc-fw"></i>
                                </div>
                            </div>
                        </div>
                        <div class="unusualkills_block">
                            <div class="block">
                                <div class="unusualkills_score"><?php echo $Player->get_unusualkills_jump()?></div>
                                <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Jump_kills')?></div>
                                <div class="icon_block">
                                    <i class="zmdi zmdi-star-outline zmdi-hc-fw"></i>
                                </div>
                            </div>
                        </div>
                        <div class="unusualkills_block_left">
                            <div class="block">
                                <div class="unusualkills_score"><?php echo $Player->get_unusualkills_smoke()?></div>
                                <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Smoke_kills')?></div>
                                <div class="icon_block">
                                    <i class="zmdi zmdi-mood-bad zmdi-hc-fw"></i>
                                </div>
                            </div>
                        </div>
                        <div class="unusualkills_block">
                            <div class="block">
                                <div class="unusualkills_score"><?php echo $Player->get_unusualkills_whirl()?></div>
                                <div class="unusualkills_text"><?php echo $Modules->get_translate_module_phrase( 'module_page_profiles','_Kills_whirl')?></div>
                                <div class="icon_block">
                                    <i class="zmdi zmdi-money zmdi-hc-fw"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
                <div class="right-block">
                    <div class="profile__block">
                    <div class="top">
                        <div class="block">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="text-center"><?php echo $Modules->get_translate_phrase('_Rating')?></th>
                                <th class=""><?php echo $Modules->get_translate_phrase('_Player')?></th>
                                <th class="text-center"><?php echo $Modules->get_translate_phrase('_Point')?></th>
                                <th class="text-center"><?php echo $Modules->get_translate_phrase('_Rank')?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php for ($ti = 0; $ti < 11; $ti++) {?>
                                <tr class="pointer <?php if( $Player->get_steam_32() == $Player->top_with_player[$ti]['steam']){echo 'table-active';}?>" onclick="location.href = '<?php echo $General->arr_general['site']?>?page=profiles&server_group=<?php echo $Player->server_group ?>&profile=<?php print $General->arr_general['only_steam_64'] === 1 ? con_steam32to64( $Player->top_with_player[$ti]['steam'] ) : $Player->top_with_player[$ti]['steam']?>';">
                                    <th class="text-center"><?php echo $Player->top_with_player['countdown_from']++?></th>
                                    <th class="table-text"><?php echo action_text_trim($Player->top_with_player[$ti]['name'],16)?></th>
                                    <th class="text-center"><?php echo $Player->top_with_player[$ti]['value']?></th>
                                    <th class="text-center table-text"><img src="<?php echo 'storage/cache/img/ranks/' . $Player->found[  $Player->server_group  ]['ranks_pack'] . '/'; empty( $Player->top_with_player[$ti]['rank'] ) ? print 0 : print $Player->top_with_player[$ti]['rank'];?>.png"></th>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                </div>
</div>