<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Law;

class LawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ["ch_name"=>"台中潛立方","business_id"=>"54750578","event"=>"民事","directions"=>"消債職權免責事件","url"=>"https://www.lawsq.com/book/46518202515","type"=>"背包客房","store_id"=>null,"hotel_id"=>"262.0","shop_id"=>null],["ch_name"=>"綠夜文旅","business_id"=>"24838106","event"=>"民事","directions"=>"返還不當得利","url"=>"https://www.lawsq.com/book/43703307241","type"=>"背包客房","store_id"=>null,"hotel_id"=>"263.0","shop_id"=>null],["ch_name"=>"承億文旅 - 台中鳥日子","business_id"=>"27597690","event"=>"民事/刑事/行政","directions"=>"違反商標法請求損害賠償刑事附帶民事訴訟,請求賠償損害,竊盜等,損害賠償,違反商標法,商標註冊,給付資遣費等,給付資遣費","url"=>"https://www.twincn.com/item.aspx?no=27597690","type"=>"背包客房","store_id"=>null,"hotel_id"=>"267.0","shop_id"=>null],["ch_name"=>"荷米旅居 Hommie Inn","business_id"=>"24607766 ","event"=>"民事","directions"=>"支付命令","url"=>"https://www.lawsq.com/book/43553578704","type"=>"背包客房","store_id"=>null,"hotel_id"=>"275.0","shop_id"=>null],["ch_name"=>"大眾浮潛","business_id"=>"21980418","event"=>"刑事","directions"=>"業務侵占","url"=>"https://www.twincn.com/item.aspx?no=21980418","type"=>"背包客房","store_id"=>null,"hotel_id"=>"388.0","shop_id"=>null],["ch_name"=>"三姐民宿","business_id"=>"40794934","event"=>"刑事","directions"=>"違反毒品危害防制條例","url"=>"https://www.lawsq.com/book/27982294175","type"=>"背包客房","store_id"=>null,"hotel_id"=>"405.0","shop_id"=>null],["ch_name"=>"快樂小屋","business_id"=>"47920133","event"=>"刑事","directions"=>"違反商標法","url"=>"https://www.lawsq.com/book/28227957158","type"=>"背包客房","store_id"=>null,"hotel_id"=>"440.0","shop_id"=>null],["ch_name"=>"晴空宿","business_id"=>"47837297","event"=>"民事","directions"=>"返還價金","url"=>"https://www.lawsq.com/book/46609194849","type"=>"背包客房","store_id"=>null,"hotel_id"=>"447.0","shop_id"=>null],["ch_name"=>"98旅店","business_id"=>"81325801","event"=>"刑事","directions"=>"公共危險","url"=>"https://www.lawsq.com/book/44565132705","type"=>"背包客房","store_id"=>null,"hotel_id"=>"457.0","shop_id"=>null],["ch_name"=>"龍洞鼻頭角潛水店","business_id"=>"78884702","event"=>"刑事","directions"=>"重傷害","url"=>"https://www.lawsq.com/book/2875508072","type"=>"背包客房","store_id"=>null,"hotel_id"=>"171.0","shop_id"=>null],["ch_name"=>"客旅家","business_id"=>"81307775","event"=>"刑事","directions"=>"竊盜","url"=>"https://www.lawsq.com/book/46568603633","type"=>"背包客房","store_id"=>null,"hotel_id"=>"176.0","shop_id"=>null],["ch_name"=>"驛家旅店-EasyInn Hotel & Hostel-青年旅館","business_id"=>"54080509","event"=>"刑事","directions"=>"偽造文書等","url"=>"https://www.lawsq.com/book/48044803256","type"=>"背包客房","store_id"=>null,"hotel_id"=>"190.0","shop_id"=>null],["ch_name"=>"福憩背包客棧-和平館","business_id"=>"40950370","event"=>"刑事/民事","directions"=>"侵權行為損害賠償,詐欺,竊盜","url"=>"https://www.twincn.com/item.aspx?no=40950370","type"=>"背包客房","store_id"=>null,"hotel_id"=>"201.0","shop_id"=>null],["ch_name"=>"奇異果快捷旅店-高雄車站店","business_id"=>"16889093","event"=>"刑事","directions"=>"詐欺","url"=>"https://www.lawsq.com/book/45234363183","type"=>"背包客房","store_id"=>null,"hotel_id"=>"211.0","shop_id"=>null],["ch_name"=>"國泰旅社-背包客的窩","business_id"=>"83129241","event"=>"刑事/民事","directions"=>"加重詐欺等,妨害風化,竊盜,毒品危害防制條例,贓物,妨害風化,社會秩序維護法,妨害性自主,侵權行為損害賠償,社會秩序維護法,毒品危害防治條例,贓物","url"=>"https://www.twincn.com/item.aspx?no=83129241","type"=>"背包客房","store_id"=>null,"hotel_id"=>"212.0","shop_id"=>null],["ch_name"=>"Uno青年旅舍","business_id"=>"54638652","event"=>"刑事","directions"=>"竊盜","url"=>"https://www.twincn.com/item.aspx?no=54638652","type"=>"背包客房","store_id"=>null,"hotel_id"=>"218.0","shop_id"=>null],["ch_name"=>"遊大俠x七桃公寓","business_id"=>"24680610","event"=>"民事","directions"=>"給付加班費等","url"=>"https://www.lawsq.com/book/48562966800","type"=>"背包客房","store_id"=>null,"hotel_id"=>"219.0","shop_id"=>null],["ch_name"=>"天藝商旅","business_id"=>"54299365","event"=>"刑事/民事","directions"=>"清償債務,支付命令,妨害家庭","url"=>"https://www.twincn.com/item.aspx?no=54299365","type"=>"背包客房","store_id"=>null,"hotel_id"=>"224.0","shop_id"=>null],["ch_name"=>"騏艦藍海灣&潛水度假村","business_id"=>"     54117920","event"=>"民事","directions"=>"請求損害賠償,給付票款,支付命令,聲明異議,本票裁定","url"=>"https://www.twincn.com/item.aspx?no=54117920","type"=>"背包客房","store_id"=>null,"hotel_id"=>"244.0","shop_id"=>null],["ch_name"=>"星空/太空艙旅店","business_id"=>"    81946935","event"=>"刑事","directions"=>"竊盜","url"=>"https://www.lawsq.com/book/44598700203","type"=>"背包客房","store_id"=>null,"hotel_id"=>"260.0","shop_id"=>null],["ch_name"=>"途中花蓮青年旅舍","business_id"=>"41464995","event"=>"公懲","directions"=>"懲戒","url"=>"https://www.lawsq.com/book/43695959011","type"=>"背包客房","store_id"=>null,"hotel_id"=>"14.0","shop_id"=>null],["ch_name"=>"悅樂旅店‧花蓮 OLAH Poshtel Hualien","business_id"=>"83628823","event"=>"刑事/民事","directions"=>"請 求職業災害損害賠償,支付命令,本票裁定,拍賣抵押物,清償借款,確認工程款債權存在,職業災害損害賠償,損害賠償,誣告等,更生事件,依職權裁定確定訴訟費用額,","url"=>"https://www.twincn.com/item.aspx?no=83628823","type"=>"背包客房","store_id"=>null,"hotel_id"=>"35.0","shop_id"=>null],["ch_name"=>"千禧山莊","business_id"=>"18051091","event"=>"刑事","directions"=>"詐欺,違反公職人員選舉罷免法等,違反電信法,過失致死等","url"=>"https://www.twincn.com/item.aspx?no=18051091","type"=>"背包客房","store_id"=>null,"hotel_id"=>"1.0","shop_id"=>null],["ch_name"=>"東岸民宿","business_id"=>"10126128","event"=>"刑事","directions"=>"違反社會秩序維護法","url"=>"https://www.lawsq.com/book/44048763509","type"=>"背包客房","store_id"=>null,"hotel_id"=>"58.0","shop_id"=>null],["ch_name"=>"綠島海灣會館","business_id"=>"45060679","event"=>"公懲","directions"=>"懲戒","url"=>"https://www.lawsq.com/book/644225497","type"=>"背包客房","store_id"=>null,"hotel_id"=>"92.0","shop_id"=>null],["ch_name"=>"戀戀火燒島","business_id"=>"62977211","event"=>"民事/刑事","directions"=>"損害賠償,詐欺","url"=>"https://www.twincn.com/item.aspx?no=62977211","type"=>"背包客房","store_id"=>null,"hotel_id"=>"102.0","shop_id"=>null],["ch_name"=>"綠島9號精品渡假村","business_id"=>"37727736","event"=>"民事","directions"=>"給付合夥出資","url"=>"https://www.twincn.com/item.aspx?no=37727736","type"=>"背包客房","store_id"=>null,"hotel_id"=>"108.0","shop_id"=>null],["ch_name"=>"綠島海韻民宿(安欣立潛水中心happyminimi divecenter) |自由潛水 |水肺潛水|","business_id"=>"62998454","event"=>"刑事","directions"=>"賭博,竊盜,毒品危害防制條例","url"=>"https://www.twincn.com/item.aspx?no=62998454","type"=>"背包客房","store_id"=>null,"hotel_id"=>"114.0","shop_id"=>null],["ch_name"=>"一直曬太陽hostel民宿(SunnyDayHostel)","business_id"=>"40786060","event"=>"民事/刑事","directions"=>"損害賠償,妨害兵役","url"=>"https://www.twincn.com/item.aspx?no=40786060","type"=>"背包客房","store_id"=>null,"hotel_id"=>"117.0","shop_id"=>null],["ch_name"=>"蘭嶼 嵐羽民宿","business_id"=>"37655085","event"=>"民事","directions"=>"損害賠償","url"=>"https://www.lawsq.com/book/44389430621","type"=>"背 包客房","store_id"=>null,"hotel_id"=>"147.0","shop_id"=>null],["ch_name"=>"Water Pro 台中總店","business_id"=>"83266862","event"=>"民事/刑事","directions"=>"侵權行為損害賠償（交通）","url"=>"https://www.twincn.com/item.aspx?no=83266862","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"41.0"],["ch_name"=>"Aropec金鴻股份有限公司 潛水 衝浪溯溪游泳三鐵(台中店)","business_id"=>"16866084","event"=>"民事","directions"=>"給付違約金等,返還模具等,除權判決,確認董事關係不存在等,損害賠償","url"=>"https://www.twincn.com/item.aspx?no=16866084","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"46.0"],["ch_name"=>"藍灣潛水訓練中心","business_id"=>"89248455","event"=>"刑事","directions"=>"竊盜","url"=>"https://www.lawsq.com/book/35487537536","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"52.0"],["ch_name"=>"三來潛水","business_id"=>"86526948","event"=>"刑事","directions"=>"違反槍砲彈藥刀械管制 條例","url"=>"https://www.lawsq.com/book/5141741945","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"85.0"],["ch_name"=>"iDiving 愛潛水","business_id"=>"25122613","event"=>"民事","directions"=>"侵權行為損害賠償","url"=>"https://www.lawsq.com/book/42538011604","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"72.0"],["ch_name"=>"台灣潛水Taipei","business_id"=>"79838170","event"=>"民事/刑事","directions"=>"請求返還打撈工程款,返還打撈 工程款,損害賠償","url"=>"https://www.twincn.com/item.aspx?no=79838170","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"56.0"],["ch_name"=>"藍波潛水用品店","business_id"=>"98102966","event"=>"刑事","directions"=>"過失 致死","url"=>"https://www.lawsq.com/book/39935302948","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"98.0"],["ch_name"=>"國傑工程企業有限公司","business_id"=>"776690","event"=>"民事","directions"=>"損害賠償,給付租金 等,給付工程款","url"=>"https://www.twincn.com/item.aspx?no=00776690","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"100.0"],["ch_name"=>"薛長興公司-三結廠","business_id"=>"41910405","event"=>"民事/刑事","directions"=>"竊盜,侵權行為損害賠償,詐欺等,收養認可,除權判決,公示催告,給付退休金等,營利事業所得稅","url"=>"https://www.twincn.com/item.aspx?no=41910405","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"103.0"],["ch_name"=>"藍海潛 水用品社","business_id"=>"93673847","event"=>"民事","directions"=>"返還所有物","url"=>"https://www.lawsq.com/book/31600442936","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"111.0"],["ch_name"=>"水盈寶潛水器材企業行","business_id"=>"17977833","event"=>"民事","directions"=>"損害賠償,給付貨款","url"=>"https://www.twincn.com/item.aspx?no=17977833","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"7.0"],["ch_name"=>"水領域潛水中心","business_id"=>"25122613","event"=>"民事","directions"=>"侵權行為損害賠償","url"=>"https://www.lawsq.com/book/42538011604","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"9.0"],["ch_name"=>"羅浮潛水中心","business_id"=>"85889317","event"=>"刑事","directions"=>"違反槍砲彈藥刀械管制條例","url"=>"https://www.lawsq.com/book/4541816571","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"16.0"],["ch_name"=>"蓬萊潛水","business_id"=>"89417445","event"=>"民事","directions"=>"損害賠償,指定遺產管理人","url"=>"https://www.twincn.com/item.aspx?no=89417445","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"18.0"],["ch_name"=>"日日選品Daily.day","business_id"=>"12254844","event"=>"民事/刑事","directions"=>"聲請清算程序,債務人異議之訴,履行契約等,更生事件,給付代收租金等,給付貨款,給付 土地使用費等,偽造文書等,免責,侵占,清算,損害賠償,業務侵占","url"=>"https://www.twincn.com/item.aspx?no=12254844","type"=>"潛水用品店","store_id"=>null,"hotel_id"=>null,"shop_id"=>"28.0"],["ch_name"=>"台灣潛水企業有限公司","business_id"=>"79838170","event"=>"民事/刑事","directions"=>"請求返還打撈工程款,返還打撈工程款,損害賠償","url"=>"https://www.twincn.com/item.aspx?no=79838170","type"=>"潛店","store_id"=>"151.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"蓬萊潛水","business_id"=>"89417445","event"=>"民事","directions"=>"損害賠償,指定遺產管理人","url"=>"https://www.twincn.com/item.aspx?no=89417445","type"=>"潛店","store_id"=>"161.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"羅浮潛水中心","business_id"=>"85889317","event"=>"刑事","directions"=>"違反槍砲彈藥刀械管制條例","url"=>"https://www.lawsq.com/book/4541816571","type"=>"潛店","store_id"=>"162.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"帶福新樂園潛水中心","business_id"=>"53477550","event"=>"民事/刑事","directions"=>"支付命令,偽造文書,返還所有物等","url"=>"https://www.twincn.com/item.aspx?no=53477550","type"=>"潛店","store_id"=>"202.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"藍灣潛水訓練 中心","business_id"=>"  89248455","event"=>"刑事","directions"=>"竊盜","url"=>"https://www.lawsq.com/book/35487537536","type"=>"潛店","store_id"=>"9.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"台灣潛水Taipei ","business_id"=>"79838170","event"=>"民事/刑事","directions"=>"請求返還打撈工程款,返還打撈工程款,損害賠償","url"=>"https://www.twincn.com/item.aspx?no=79838170","type"=>"潛店","store_id"=>"33.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"海底玩家潛水訓 練中心","business_id"=>"80013816","event"=>"民事/刑事","directions"=>"清償借款,聲請交付審判","url"=>"https://www.twincn.com/item.aspx?no=80013816","type"=>"潛店","store_id"=>"40.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"國傑工程企業有限公司","business_id"=>"776690","event"=>"民事","directions"=>"損害賠償,給付租金等,給付工程款","url"=>"https://www.twincn.com/item.aspx?no=00776690","type"=>"潛店","store_id"=>"22.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"夢想家潛水","business_id"=>"72840284","event"=>"民事","directions"=>"確認僱傭關係存在","url"=>"https://www.lawsq.com/book/45593082448","type"=>"潛店","store_id"=>"13.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"iDiving愛潛水","business_id"=>"     25122613","event"=>"民事","directions"=>"侵權行為損害賠償","url"=>"https://www.lawsq.com/book/42538011604","type"=>"潛店","store_id"=>"43.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"1988潛水家","business_id"=>"50788496","event"=>"民事","directions"=>"返還課程費用","url"=>"https://www.lawsq.com/book/46308090651","type"=>"潛店","store_id"=>"47.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"好野人休閒事業有限公司","business_id"=>"24328547","event"=>"民事","directions"=>"損害賠償","url"=>"https://www.twincn.com/item.aspx?no=24328547","type"=>"潛店","store_id"=>"51.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"勝宏浮潛","business_id"=>"36859842","event"=>"刑事/民事","directions"=>"違反廢棄物清理法,業務過失致死,損害賠償,更生事件,偽造有價證券,給付貨款,給付勞工保險費","url"=>"https://www.twincn.com/item.aspx?no=36859842","type"=>"潛店","store_id"=>"84.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"綠島海灣 會館","business_id"=>"45060679","event"=>"公懲","directions"=>"懲戒","url"=>"https://www.lawsq.com/book/644225497","type"=>"潛店","store_id"=>"87.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"戀戀火燒島","business_id"=>"62977211","event"=>"刑事/民事","directions"=>"損害賠償,詐欺","url"=>"https://www.twincn.com/item.aspx?no=62977211","type"=>"潛店","store_id"=>"100.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"小琉球-小綠龜潛水","business_id"=>"37677497","event"=>"民事/刑事","directions"=>"侵權行為損害賠償,請求侵權行為損害賠償,業務過失重傷害,分割共有物","url"=>"https://www.twincn.com/item.aspx?no=37677497","type"=>"潛店","store_id"=>"286.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"小琉 球 小丑魚浮潛","business_id"=>"81357726","event"=>"民事/刑事","directions"=>"損害賠償,業務過失致死","url"=>"https://www.twincn.com/item.aspx?no=81357726","type"=>"潛店","store_id"=>"301.0","hotel_id"=>null,"shop_id"=>null],["ch_name"=>"大眾浮潛","business_id"=>"21980418","event"=>"刑事","directions"=>"業務侵占","url"=>"https://www.twincn.com/item.aspx?no=21980418","type"=>"潛店","store_id"=>"312.0","hotel_id"=>null,"shop_id"=>null]];


        foreach($data as $row){
            Law::create($row);
        }
    }
}
