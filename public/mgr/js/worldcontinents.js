// JavaScript Document
var WorldContinents = [];
var WorldContinentDetails = [];
var WorldContinentDetailCountrys = [];
WorldContinents = ['NA||北美洲||North America', 'EU||欧洲||Europe', 'OC||大洋州||Oceania', 'SA||南美洲||South America', 'AS||亚洲||Asia', 'AF||非洲||Africa'];
for(var wLength = 0; wLength < WorldContinents.length; wLength ++) {
	var value = WorldContinents[wLength];
	var valueArray = value.split('||');
	eval('var WorldContinents_' + valueArray[0] + ' = [];');
}
WorldContinents_NA = [
'CA||加拿大||Canada', 'US||美国||United States', 'MX||墨西哥||Mexico', 'GL||格陵兰||Greenland', //北部
'GT||危地马拉||Guatemala', 'BZ||伯利兹||Belize', 'SV||萨尔瓦多||El Salvador', 'HN||洪都拉斯||Honduras', 'NI||尼加拉瓜||Nicaragua', 'CR||哥斯达黎加||Costa Rica', 'PA||巴拿马||Panama', //中部
'BS||巴哈马||Bahamas', 'CU||古巴||Cuba', 'JM||牙买加||Jamaica', 'HT||海地||Haiti', 'DO||多米尼加||Dominican Republic', 'AG||安提瓜和巴布达||Antigua and Barbuda', 'KN||圣基茨和尼维斯||Saint Kitts and Nevis', 'DM||多米尼克||Dominica', 'LC||圣卢西亚||Saint Lucia', 'VC||圣文森特和格林纳丁斯||Saint Vincent and the Grenadines', 'GD||格林纳达||Grenada', 'BB||巴巴多斯||Barbados', 'TT||特立尼达和多巴哥||Trinidad and Tobago', 'PR||波多黎各||Puerto Rico', 'VG||英属维尔京群岛||British Virgin Islands', 'VI||美属维尔京群岛||United States Virgin Islands', 'AI||安圭拉||Anguilla', 'MS||蒙塞拉特岛||Montserrat', 'GP||瓜德罗普||Guadeloupe', 'MQ||马提尼克||Martinique', 'AW||阿鲁巴||Aruba', 'TC||特克斯和凯科斯群岛||Turks and Caicos Islands', 'KY||开曼群岛||Cayman Islands', 'BM||百慕大||Bermuda', //加勒比海地区
];

WorldContinents_EU = [
'GB||英国||United Kingdom', 'IE||爱尔兰||Ireland', 'NL||荷兰||Netherlands', 'BE||比利时||Belgium', 'LU||卢森堡||Luxembourg', 'FR||法国||France', 'MC||摩纳哥||Monaco', //西欧
'RO||罗马尼亚||Romania', 'BG||保加利亚||Bulgaria', 'RS||塞尔维亚||Serbia', 'MK||马其顿||Macedonia, the former Yugoslav Republic of', 'AL||阿尔巴尼亚||Albania', 'GR||希腊||Greece', 'SI||斯洛文尼亚||Slovenia', 'HR||克罗地亚||Croatia', 'BA||波黑||Bosnia and Herzegovina', 'IT||意大利||Italy', 'VA||梵蒂冈||Holy See(Vatican City State)', 'SM||圣马力诺||San Marino', 'MT||马耳他||Malta', 'ES||西班牙||Spain', 'PT||葡萄牙||Portugal', 'AD||安道尔||Andorra', //南欧
'PL||波兰||Poland', 'CS||捷克||Czech Republic', 'SK||斯洛伐克||Slovakia', 'HU||匈牙利||Hungary', 'DE||德国||Germany', 'AT||奥地利||Austria', 'CH||瑞士||Switzerland', 'LI||列支敦士登||Liechtenstein', //中欧
'FI||芬兰||Finland', 'SE||瑞典||Sweden', 'NO||挪威||Norway', 'IS||冰岛||Iceland', 'DK||丹麦||Denmark', 'FO||法罗群岛||Faroe Islands', //北欧
'EE||爱沙尼亚||Estonia', 'LV||拉脱维亚||Latvia', 'LT||立陶宛||Lithuania', 'BY||白俄罗斯||Belarus', 'RU||俄罗斯||Russian Federation', 'UA||乌克兰||Ukraine', 'MD||摩尔多瓦||Moldova, Republic of', //东欧
];

WorldContinents_OC = [
'AU||澳大利亚||Australia', 'NZ||新西兰||New Zealand', 'PG||巴布亚新几内亚||Papua New Guinea', 'SB||所罗门群岛||Solomon Islands', 'VU||瓦努阿图||Vanuatu', 'FM||密克罗尼西亚联邦||Micronesia, Federated States of', 'MH||马绍尔群岛||Marshall islands', 'PW||帕劳||Palau', 'NR||瑙鲁||Nauru', 'KI||基里巴斯||Kiribati', 'TV||图瓦卢||Tuvalu', 'WS||萨摩亚||Samoa', 'FJ||斐济群岛||Fiji', 'TO||汤加||Tonga', 'CK||库克群岛||Cook Islands', 'GU||关岛||Guam', 'NC||新喀里多尼亚||New Caledonia', 'PF||法属波利尼西亚||French Polynesia', 'PN||皮特凯恩群岛||Pitcairn Islands', 'WF||瓦利斯和富图纳||Wallis and Futuna', 'NU||纽埃||Niue', 'TK||托克劳||Tokelau', 'AS||美属萨摩亚||American Samoa', 'MP||北马里亚纳群岛||Northern Mariana Islands',
];

WorldContinents_SA = [
'CO||哥伦比亚||Colombia', 'VE||委内瑞拉||Venezuela, Bolivarian Republic of', 'GY||圭亚那||Guyana', 'GF||法属圭亚那||French Guiana', 'SR||苏里南||Suriname', //北部
'EC||厄瓜多尔||Ecuador', 'PE||秘鲁||Peru', 'BO||玻利维亚||Bolivia, Plurinational', //中西部
'BR||巴西||Brazil', //东部
'CL||智利||Chile', 'AR||阿根廷||Argentina', 'UY||乌拉圭||Uruguay', 'PY||巴拉圭||Paraguay', //南部
];

WorldContinents_AS = [ 'CN||中国||People’s Republic of China', 'JP||日本||Japan', 'KR||韩国||Korea, Republic of', 'MN||蒙古||Mongolia', 'KP||朝鲜||Korea, Democratic People’s Republic of', // 东亚
'PH||菲律宾||Philippines', 'VN||越南||Vietnam', 'LA||老挝||Lao People’s Democratic Republic', 'KH||柬埔寨||Cambodia', 'MM||缅甸||Myanmar', 'TH||泰国||Thailand', 'MY||马来西亚||Malaysia', 'BN||文莱||Brunei Darussalam)', 'SG||新加坡||Singapore', 'RI||印度尼西亚||Indonesia', 'TL||东帝汶||Timor-Leste', //东南亚
'NP||尼泊尔||Nepal', 'BT||不丹||Bhutan', 'BD||孟加拉国||Bangladesh', 'IN||印度||India', 'PK||巴基斯坦||Pakistan', 'LK||斯里兰卡||Sri Lanka', 'MV||马尔代夫||Maldives', //南亚
'KZ||哈萨克斯坦||Kazakhstan', 'KG||吉尔吉斯斯坦||Kyrgyzstan', 'TJ||塔吉克斯坦||Tajikistan', 'UZ||乌兹别克斯坦||Uzbekistan', 'TM||土库曼斯坦||Turkmenistan', //中亚
'AF||阿富汗||Afghanistan', 'IQ||伊拉克||Iraq', 'IR||伊朗||Iran, Islamic Republic of', 'SY||叙利亚||Syrian Arab Republic', 'JO||约旦||Jordan', 'LB||黎巴嫩||Lebanon', 'IL||以色列||Israel', 'PS||巴勒斯坦||Palestine, State of', 'SA||沙特阿拉伯||Saudi Arabia', 'BH||巴林||Bahrain', 'QA||卡塔尔||Qatar', 'KW||科威特||Kuwait', 'AE||阿联酋||United Arab Emirates', 'OM||阿曼||Oman', 'YE||也门||Yemen', 'GE||格鲁吉亚||Georgia', 'AM||亚美尼亚||Armenia', 'AZ||阿塞拜疆||Azerbaijan', 'TR||土耳其||Turkey', 'CY||塞浦路斯||Cyprus', //西亚
];

WorldContinents_AF = [
'EG||埃及||Egypt', 'LY||利比亚||Libya', 'SD||苏丹||Sudan', 'TN||突尼斯||Tunisia', 'DZ||阿尔及利亚||Algeria', 'MA||摩洛哥||Morocco', //北非
'ET||埃塞俄比亚||Ethiopia', 'ER||厄立特里亚||Eritrea', 'SO||索马里||Somalia', 'DJ||吉布提||Djibouti', 'KE||肯尼亚||Kenya', 'TZ||坦桑尼亚||Tanzania, United Republic of', 'UG||乌干达||Uganda', 'RW||卢旺达||Rwanda', 'BI||布隆迪||Burundi', 'SC||塞舌尔||Seychelles', //东非
'TD||乍得||Chad', 'CF||中非||Central African Republic', 'CM||喀麦隆||Cameroon', 'GQ||赤道几内亚||Equatorial Guinea', 'GA||加蓬||Gabon', 'CG||刚果（布）||Congo', 'CD||刚果（金）||Congo, the Democratic Republic of the', 'ST||圣多美和普林西比||Sao Tome and Principe', //中非
'MR||毛里塔尼亚||Mauritania', 'EH||西撒哈拉||Western Sahara', 'SN||塞内加尔||Senegal', 'GM||冈比亚||Gambia', 'ML||马里||Mali', 'BF||布基纳法索||Burkina Faso', 'GN||几内亚||Guinea', 'GW||几内亚比绍||Guinea-Bissau', 'CV||佛得角||Cape Verde', 'SL||塞拉利昂||Sierra Leone', 'LR||利比里亚||Liberia', 'CI||科特迪瓦||Côte d’Ivoire', 'GH||加纳||Ghana', 'TG||多哥||Togo', 'BJ||贝宁||Benin', 'NE||尼日尔||Niger', //西非
'ZM||赞比亚||Zambia', 'AO||安哥拉||Angola', 'ZW||津巴布韦||Zimbabwe', 'MW||马拉维||Malawi', 'MZ||莫桑比克||Mozambique', 'BW||博茨瓦纳||Botswana', 'NA||纳米比亚||Namibia', 'ZA||南非||South Africa', 'SZ||斯威士兰||Swaziland', 'LS||莱索托||Lesotho', 'MG||马达加斯加||Madagascar', 'KM||科摩罗||Comoros', 'MU||毛里求斯||Mauritius', 'SH||圣赫勒拿||Saint Helena, Ascension and Tristan da Cunha', //南非
];
