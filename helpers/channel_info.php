<?php


function setChannel_Webhook($case)
{
    //region WEBHOOKS
    $webhook_nspbase_09 = 'https://discordapp.com/api/webhooks/508760046696398858/MRC61ByDknBzbc7FTk2sxR8UcbfgWfERKkuTS4MH4b-dNBrk8tg6EFWj3pwdfWhB3xEv';
    $webhook_nspbase_a = 'https://discordapp.com/api/webhooks/508771785060122648/l245p9CPCJnGgQDpcQYGk4GfIK8Ff0ALQ6Vub_ZwQ6MT1yPWXOdWFJAHWy-G9ecm1beE';
    $webhook_nspbase_b = 'https://discordapp.com/api/webhooks/508771957827829781/qAm141NMdYSZLlKrGaD2Eciw__l65FVje3quSR36jVD5XGzBjFiWZ08TsLpDWkT27TmH';
    $webhook_nspbase_c = 'https://discordapp.com/api/webhooks/508772090061520921/pywWqj97SOmHqf0rxx5p1UWD_4vFjbaxOc7fR0UlUxvefFa7kLS9oj70FlpT_tAP67mG';
    $webhook_nspbase_d = 'https://discordapp.com/api/webhooks/508772397520912384/KyfULJrMuWtXeRPU8vp-GiV871qlZYA_5vaploKIf-2Hfv-HBsRYFKeQ_totUrQGz3uZ';
    $webhook_nspbase_e = 'https://discordapp.com/api/webhooks/508772491087577108/TeDSW6DdkZtCY5C7PoNk6r7q6Qb87qvocoVichOuBPeD2dFVdZuW1dpL24oag15M1Rs0';
    $webhook_nspbase_f = 'https://discordapp.com/api/webhooks/508772553007824910/9P7Jle9DR6JaJiIz3VwZrWEJseisw4DiN6bKkHIMJtPDQzm7l3v3pE34_mNpD2ldoYNh';
    $webhook_nspbase_g = 'https://discordapp.com/api/webhooks/508772708058791972/zrh0OrGzRKLX6zaaUkzKsKyEyYLn2uJkl1JmiwNKrzLpZr7-BafYGcd6B0wMZOwS9R2D';
    $webhook_nspbase_h = 'https://discordapp.com/api/webhooks/508772762807042078/oS4pBG2eO1OX4PxZfw4JmyNgA1RTrlNv1RpHGiChTzAuvjKd3rT22vV-rhyAevtEfzwO';
    $webhook_nspbase_i = 'https://discordapp.com/api/webhooks/508772868230873090/0A-1loDlw-b6WULxfurj_qJn_tHH9-AT_POq2kdWjJIedUgQv9aTM1o4CooZqiiKwJET';
    $webhook_nspbase_j = 'https://discordapp.com/api/webhooks/508772930696773682/PWnbSFejIUzgelO0c0W_JMP1pxGhidUaXxCYw4cBVN4LOM6pcahdatbafW5_wJ5aoVwZ';
    $webhook_nspbase_k = 'https://discordapp.com/api/webhooks/508773003568480256/kgQXdcdpoQABZ3vgNl2ELspERcMl4aKGd-MzG2WtQ6WNbDuvoVmzH8u5VHT6SwxGcDVM';
    $webhook_nspbase_l = 'https://discordapp.com/api/webhooks/508773077706997771/S2P6gMOo8MFC4_VDBN-ojkRBh7JBNS5X7bSzjbHRuHScjfD9beVhzEtgtVnjHSmuX4yF';
    $webhook_nspbase_m = 'https://discordapp.com/api/webhooks/508773212230778881/QP8bongN5mcLdX7VumMvP0VsSdoVbobKy-bUQyRi6pFSLGE1rHe1GyeD6wVl6BLe7Bzu';
    $webhook_nspbase_n = 'https://discordapp.com/api/webhooks/508773255843414017/Sj2mFNHiVlreAEVRxo7rTtuXp-kHT1TL18yeVWlfOQJoLITps9Vs2TqcDjKijWUF3q7B';
    $webhook_nspbase_o = 'https://discordapp.com/api/webhooks/508773342778621955/oKvEhhIMCGwGnJhHbcTR6PwBak2WfJUPu3dQmFzHeKqStpMZvhylnQYQWE1m7fIC7TTB';
    $webhook_nspbase_p = 'https://discordapp.com/api/webhooks/508773538900213762/6OGpE-Xe6QEX3vwMKc20ZsoTtvbja6FLCSiddp7KLXKoMBT-ONSk3gAO1-ti-uGy8pgT';
    $webhook_nspbase_q = 'https://discordapp.com/api/webhooks/508773597712482323/VzExn_qgJxqbh2yBrlApQfFo76HPf6IyTq6GCAHYdWKog43fJHL_M__gvnHj93LKLigL';
    $webhook_nspbase_r = 'https://discordapp.com/api/webhooks/508773685457453087/dpRdurPyjzjez0P9g_ehEPwBob0s_m9k-wOeHXY2j3D-kUzMTm--wnqcdXLuoUkD9-QV';
    $webhook_nspbase_s = 'https://discordapp.com/api/webhooks/508773760594345993/iGYb6EtueWt_bop6pfzqHsIjzKe5EqrFsb_7THxd4IXwu-VCREoPDao20-0QzYrD2Nob';
    $webhook_nspbase_t = 'https://discordapp.com/api/webhooks/508773805183860736/WohM56wtMu_ZQ_eOMvSeZTJLhHYL2MpzF31Nlq0U1NYNLYmtuCLBZSyE1mW6vr4pGyfd';
    $webhook_nspbase_u = 'https://discordapp.com/api/webhooks/508773897043181599/8pf345rm1EQ2DG607g1rynyWaXg49KZ8NpFANEe7mEVHO_YN-6sGiQyo21ls3N-EacXx';
    $webhook_nspbase_v = 'https://discordapp.com/api/webhooks/508773987916972052/5N8371YHim26-Q1vduX0dFpIvBP_YNABBQwKN9zbODK9XcrzFcN4ADGC-L6h3pjooWXl';
    $webhook_nspbase_w = 'https://discordapp.com/api/webhooks/508774055789330434/BkGS-FWuDsd4lOiq4FzAASsmthW-nVFh3RLRGsM85akp7LTvnn-NVXlfW7tNYulMydpn';
    $webhook_nspbase_x = 'https://discordapp.com/api/webhooks/508774125184090133/cqT4NM-n5DWvPd_y_wwriSnG8CiI4Cnpu8bRjzHjYg0ItTHjLm8MW87UhiEq7ezFS_mX';
    $webhook_nspbase_y = 'https://discordapp.com/api/webhooks/508774205190569994/-3e4JL4jVhEIlqi7BNFUyCphkENTvzyNylemuViFXay7wURCJzaWbiHCXpHjoKrTx8iW';
    $webhook_nspbase_z = 'https://discordapp.com/api/webhooks/508774254284898315/pVbJDBnUqHgd94AC8Hv-x0sPcLexlJU_efVv-UEPQPgSWgnpoNebE67McfO4nsiq0T7U';
    //endregion

    switch ($case) {
        case "A":
            return $webhook_nspbase_a;
            break;
        case "B":
            return  $webhook_nspbase_b;
            break;
        case "C":
            return  $webhook_nspbase_c;
            break;
        case "D":
            return $webhook_nspbase_d;
            break;
        case "E":
            return  $webhook_nspbase_e;
            break;
        case "F":
            return $webhook_nspbase_f;
            break;
        case "G":
            return  $webhook_nspbase_g;
            break;
        case "H":
            return  $webhook_nspbase_h;
            break;
        case "I":
            return  $webhook_nspbase_i;
            break;
        case "J":
            return  $webhook_nspbase_j;
            break;
        case "K":
            return  $webhook_nspbase_k;
            break;
        case "L":
            return  $webhook_nspbase_l;
            break;
        case "M":
            return $webhook_nspbase_m;
            break;
        case "N":
            return  $webhook_nspbase_n;
            break;
        case "O":
            return  $webhook_nspbase_o;
            break;
        case "P":
            return  $webhook_nspbase_p;
            break;
        case "Q":
            return  $webhook_nspbase_q;
            break;
        case "R":
            return  $webhook_nspbase_r;
            break;
        case "S":
            return  $webhook_nspbase_s;
            break;
        case "T":
            return  $webhook_nspbase_t;
            break;
        case "U":
            return  $webhook_nspbase_u;
            break;
        case "V":
            return  $webhook_nspbase_v;
            break;
        case "W":
            return  $webhook_nspbase_w;
            break;
        case "X":
            return $webhook_nspbase_x;
            break;
        case "Y":
            return  $webhook_nspbase_y;
            break;
        case "Z":
            return  $webhook_nspbase_z;
            break;
        case "0":
            return $webhook_nspbase_09;
            break;
        case "1":
            return  $webhook_nspbase_09;
            break;
        case "2":
            return  $webhook_nspbase_09;
            break;
        case "3":
            return  $webhook_nspbase_09;
            break;
        case "4":
            return  $webhook_nspbase_09;
            break;
        case "5":
            return  $webhook_nspbase_09;
            break;
        case "6":
            return  $webhook_nspbase_09;
            break;
        case "7":
            return  $webhook_nspbase_09;
            break;
        case "8":
            return  $webhook_nspbase_09;
            break;
        case "9":
            return  $webhook_nspbase_09;
            break;
        default:
            return  $webhook_nspbase_09;
            break;

    }
}

function setChannel_Title($case)
{
    //region TITLES
    $webhook_nspbase_09 = 'NSP Base #0-9    -   ';
    $webhook_nspbase_a = 'NSP Base #A    -   ';
    $webhook_nspbase_b = 'NSP Base #B    -   ';
    $webhook_nspbase_c = 'NSP Base #C    -   ';
    $webhook_nspbase_d = 'NSP Base #D    -   ';
    $webhook_nspbase_e = 'NSP Base #E    -   ';
    $webhook_nspbase_f = 'NSP Base #F    -   ';
    $webhook_nspbase_g = 'NSP Base #G    -   ';
    $webhook_nspbase_h = 'NSP Base #H    -   ';
    $webhook_nspbase_i = 'NSP Base #I    -   ';
    $webhook_nspbase_j = 'NSP Base #J    -   ';
    $webhook_nspbase_k = 'NSP Base #K    -   ';
    $webhook_nspbase_l = 'NSP Base #L    -   ';
    $webhook_nspbase_m = 'NSP Base #M    -   ';
    $webhook_nspbase_n = 'NSP Base #N    -   ';
    $webhook_nspbase_o = 'NSP Base #O    -   ';
    $webhook_nspbase_p = 'NSP Base #P    -   ';
    $webhook_nspbase_q = 'NSP Base #Q    -   ';
    $webhook_nspbase_r = 'NSP Base #R    -   ';
    $webhook_nspbase_s = 'NSP Base #S    -   ';
    $webhook_nspbase_t = 'NSP Base #T    -   ';
    $webhook_nspbase_u = 'NSP Base #U    -   ';
    $webhook_nspbase_v = 'NSP Base #V    -   ';
    $webhook_nspbase_w = 'NSP Base #W    -   ';
    $webhook_nspbase_x = 'NSP Base #X    -   ';
    $webhook_nspbase_y = 'NSP Base #Y    -   ';
    $webhook_nspbase_z = 'NSP Base #Z    -   ';
    //endregion

    switch ($case) {
        case "A":
            return $webhook_nspbase_a;
            break;
        case "B":
            return  $webhook_nspbase_b;
            break;
        case "C":
            return  $webhook_nspbase_c;
            break;
        case "D":
            return $webhook_nspbase_d;
            break;
        case "E":
            return  $webhook_nspbase_e;
            break;
        case "F":
            return $webhook_nspbase_f;
            break;
        case "G":
            return  $webhook_nspbase_g;
            break;
        case "H":
            return  $webhook_nspbase_h;
            break;
        case "I":
            return  $webhook_nspbase_i;
            break;
        case "J":
            return  $webhook_nspbase_j;
            break;
        case "K":
            return  $webhook_nspbase_k;
            break;
        case "L":
            return  $webhook_nspbase_l;
            break;
        case "M":
            return $webhook_nspbase_m;
            break;
        case "N":
            return  $webhook_nspbase_n;
            break;
        case "O":
            return  $webhook_nspbase_o;
            break;
        case "P":
            return  $webhook_nspbase_p;
            break;
        case "Q":
            return  $webhook_nspbase_q;
            break;
        case "R":
            return  $webhook_nspbase_r;
            break;
        case "S":
            return  $webhook_nspbase_s;
            break;
        case "T":
            return  $webhook_nspbase_t;
            break;
        case "U":
            return  $webhook_nspbase_u;
            break;
        case "V":
            return  $webhook_nspbase_v;
            break;
        case "W":
            return  $webhook_nspbase_w;
            break;
        case "X":
            return $webhook_nspbase_x;
            break;
        case "Y":
            return  $webhook_nspbase_y;
            break;
        case "Z":
            return  $webhook_nspbase_z;
            break;
        case "0":
            return $webhook_nspbase_09;
            break;
        case "1":
            return  $webhook_nspbase_09;
            break;
        case "2":
            return  $webhook_nspbase_09;
            break;
        case "3":
            return  $webhook_nspbase_09;
            break;
        case "4":
            return  $webhook_nspbase_09;
            break;
        case "5":
            return  $webhook_nspbase_09;
            break;
        case "6":
            return  $webhook_nspbase_09;
            break;
        case "7":
            return  $webhook_nspbase_09;
            break;
        case "8":
            return  $webhook_nspbase_09;
            break;
        case "9":
            return  $webhook_nspbase_09;
            break;
        default:
            return  $webhook_nspbase_09;
            break;

    }
}
