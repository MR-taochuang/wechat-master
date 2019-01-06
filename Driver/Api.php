<?php

namespace Driver;

/**
 * Class ApiPath
 * @package Driver
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/26 13:41
 * 微信接口地址
 */
class Api
{

    /**
     * 接口地址
     * @return array
     * @url https://mp.weixin.qq.com/wiki 微信文档地址
     */
    const API = [
        //获取微信access_token 请求方式 GET
        'AccessToken' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET',
        //获取微信服务器Ip 请求方式 GET
        'GetWechatIp' => 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=ACCESS_TOKEN',
        //检测网络 请求方式 POST
        'WebCheck' => 'https://api.weixin.qq.com/cgi-bin/callback/check?access_token=ACCESS_TOKEN',
        //创建微信菜单 请求方式 POST
        'CreateMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN',
        //获取微信菜单 请求方式 GET
        'GetMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/get?access_token=ACCESS_TOKEN',
        //删除微信菜单 请求方式 GET
        'DeleteMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=ACCESS_TOKEN',
        //创建个性化菜单 请求方式 POST
        'CreateConditionalMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/addconditional?access_token=ACCESS_TOKEN',
        //删除个性化菜单 请求方式 POST
        'DeleteConditionalMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/delconditional?access_token=ACCESS_TOKEN',
        //测试个性化菜单匹配结果 请求方式 POST
        'TryMatch' => 'https://api.weixin.qq.com/cgi-bin/menu/trymatch?access_token=ACCESS_TOKEN',
        //获取自定义菜单配置接口 请求方式 GET
        'GetCurrentSelfmenuInfo' => 'https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token=ACCESS_TOKEN',
        //添加客服账号 请求方式 POST
        'CreateKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/add?access_token=ACCESS_TOKEN',
        //邀请绑定客服帐号
        'KfaccountInviteworker' => 'https://api.weixin.qq.com/customservice/kfaccount/inviteworker?access_token=ACCESS_TOKEN',
        //修改客服账号 请求方式 POST
        'UpdateKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/update?access_token=ACCESS_TOKEN',
        //删除客服账号 请求方式 POST
        'DeleteKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/del?access_token=ACCESS_TOKEN',
        //GET方式删除客服账号 请求方式 GET
        'DeleteKfaccountGet' => 'https://api.weixin.qq.com/customservice/kfaccount/del?access_token=ACCESS_TOKEN&kf_account=KFACCOUNT',
        //设置客服帐号的头像 请求方式 FORM/POST
        'UploadHeadimgKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/uploadheadimg?access_token=ACCESS_TOKEN&kf_account=KFACCOUNT',
        //获取所有客服账号 请求方式 GET
        'GetKflist' => 'https://api.weixin.qq.com/cgi-bin/customservice/getkflist?access_token=ACCESS_TOKEN',
        //客服在线状态 以及客服接待会话数 请求方式 GET
        'GetOnlineKflist' => 'https://api.weixin.qq.com/cgi-bin/customservice/getonlinekflist?access_token=ACCESS_TOKEN',
        //客服接口-发消息 请求方式 POST
        'CustomSend' => 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=ACCESS_TOKEN',
        //客服输入状态 请求方式 POST
        'CustomTyping' => 'https://api.weixin.qq.com/cgi-bin/message/custom/typing?access_token=ACCESS_TOKEN',
        //创建会话 请求方式 POST
        'CreateKfsession' => 'https://api.weixin.qq.com/customservice/kfsession/create?access_token=ACCESS_TOKEN',
        //关闭会话 请求方式 POST
        'CloseKfsession' => 'https: //api.weixin.qq.com/customservice/kfsession/close?access_token=ACCESS_TOKEN',
        //获取客服会话状态 请求方式 GET
        'KfGetSession' => 'https://api.weixin.qq.com/customservice/kfsession/getsession?access_token=ACCESS_TOKEN&openid=OPENID',
        //获取客服会话列表 请求方式 GET
        'KfGetSessionlist' => 'https://api.weixin.qq.com/customservice/kfsession/getsessionlist?access_token=ACCESS_TOKEN&kf_account=KFACCOUNT',
        //获取客服未接入会话列表 请求方式 GET
        'KfsessionGetWaitcase' => 'https://api.weixin.qq.com/customservice/kfsession/getwaitcase?access_token=ACCESS_TOKEN',
        //获取聊天记录 请求方式 POST
        'GetMsglist' => 'https://api.weixin.qq.com/customservice/msgrecord/ getmsglist ?access_token=ACCESS_TOKEN',
        //上传图文消息内的图片获取URL【订阅号与服务号认证后均可用】 请求方式 POST
        //请注意，本接口所上传的图片不占用公众号的素材库中图片数量的5000个的限制。图片仅支持jpg/png格式，大小必须在1MB以下。
        'MediaUploadimg' => 'https://api.weixin.qq.com/cgi-bin/media/uploadimg?access_token=ACCESS_TOKEN',
        //上传图文消息素材【订阅号与服务号认证后均可用】 请求方式 POST
        'MediaUploadNews' => 'https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=ACCESS_TOKEN',
        //根据标签进行群发【订阅号与服务号认证后均可用】 请求方式 POST
        'MassSendAll' => 'https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=ACCESS_TOKEN',
        //根据OpenID列表群发【订阅号不可用，服务号认证后可用】 请求方式 POST
        'MassSend' => 'https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=ACCESS_TOKEN',
        //删除群发【订阅号与服务号认证后均可用】 请求方式 POST
        'MassDelete' => 'https://api.weixin.qq.com/cgi-bin/message/mass/delete?access_token=ACCESS_TOKEN',
        //预览接口【订阅号与服务号认证后均可用】 请求方式 POST
        'MassPreview' => 'https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=ACCESS_TOKEN',
        //查询群发消息发送状态【订阅号与服务号认证后均可用】 请求方式 POST
        'MassGet' => 'https://api.weixin.qq.com/cgi-bin/message/mass/get?access_token=ACCESS_TOKEN',
        //控制群发速度-获取群发速度 请求方式 POST
        'MassSpeedGet' => 'https://api.weixin.qq.com/cgi-bin/message/mass/speed/get?access_token=ACCESS_TOKEN',
        //控制群发速度-设置群发速度 请求方式 POST
        'MassSpeedSet' => 'https://api.weixin.qq.com/cgi-bin/message/mass/speed/set?access_token=ACCESS_TOKEN',
        //设置所属行业 请求方式 POST
        'TemplateSetIndustry' => 'https://api.weixin.qq.com/cgi-bin/template/api_set_industry?access_token=ACCESS_TOKEN',
        //获取设置的行业信息 请求方式 GET
        'TemplateGetIndustry' => 'https://api.weixin.qq.com/cgi-bin/template/get_industry?access_token=ACCESS_TOKEN',
        //获取模板ID 请求方式 POST
        'TemplateId' => 'https://api.weixin.qq.com/cgi-bin/template/api_add_template?access_token=ACCESS_TOKEN',
        //获取模板列表 请求方式 GET
        'TemplateList' => 'https://api.weixin.qq.com/cgi-bin/template/get_all_private_template?access_token=ACCESS_TOKEN',
        //删除模板 请求方式 POST
        'TemplateDelete' => 'https://api.weixin.qq.com/cgi-bin/template/del_private_template?access_token=ACCESS_TOKEN',
        //发送模板消息 请求方式 POST
        'TemplateSend' => 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=ACCESS_TOKEN',
        //获取公众号的自动回复规则 请求方式 GET
        'GetCurrent' => 'https://api.weixin.qq.com/cgi-bin/get_current_autoreply_info?access_token=ACCESS_TOKEN',
        //新增临时素材 请求方式 FORM/POST
        'MediaUpload' => 'https://api.weixin.qq.com/cgi-bin/media/upload?access_token=ACCESS_TOKEN&type=TYPE',
        //获取临时素材 请求方式 GET
        'MediaGet' => 'https://api.weixin.qq.com/cgi-bin/media/get?access_token=ACCESS_TOKEN&media_id=MEDIA_ID',
        //获取清晰临时素材 请求方式 GET
        'MediaGetJssdk' => 'https://api.weixin.qq.com/cgi-bin/media/get/jssdk?access_token=ACCESS_TOKEN&media_id=MEDIA_ID',
        //新增永久图文素材 评论 请求方式 POST
        'MediaNews' => 'https://api.weixin.qq.com/cgi-bin/material/add_news?access_token=ACCESS_TOKEN',
        //新增其他永久素材 请求方式 FORM/POST
        'MediaOther' => 'https://api.weixin.qq.com/cgi-bin/material/add_material?access_token=ACCESS_TOKEN&type=TYPE',
        //获取永久素材 请求方式 POST
        'MediaGetMaterial' => 'https://api.weixin.qq.com/cgi-bin/material/get_material?access_token=ACCESS_TOKEN',
        //删除永久素材 请求方式 POST
        'MediaDeleteMaterial' => 'https://api.weixin.qq.com/cgi-bin/material/del_material?access_token=ACCESS_TOKEN',
        //修改永久素材 请求方式 POST
        'MediaUpdateMaterial' => 'https://api.weixin.qq.com/cgi-bin/material/update_news?access_token=ACCESS_TOKEN',
        //获取素材总数 请求方式 GET
        'MediaCount' => 'https://api.weixin.qq.com/cgi-bin/material/get_materialcount?access_token=ACCESS_TOKEN',
        //获取素材列表 请求方式 POST
        'MediaList' => 'https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token=ACCESS_TOKEN',
        //开启文章评论 请求方式 POST
        'MediaOpenComment' => 'https://api.weixin.qq.com/cgi-bin/comment/open?access_token=ACCESS_TOKEN',
        //关闭文章评论 请求方式 POST
        'MediaCloseComment' => 'https://api.weixin.qq.com/cgi-bin/comment/close?access_token=ACCESS_TOKEN',
        //查看指定文章评论数据 请求方式 POST
        'MediaShowComment' => 'https://api.weixin.qq.com/cgi-bin/comment/list?access_token=ACCESS_TOKEN',
        //标记评论精选 请求方式 POST
        'MediaMarkComment' => 'https://api.weixin.qq.com/cgi-bin/comment/markelect?access_token=ACCESS_TOKEN',
        //将评论取消精选 请求方式 POST
        'MediaUnmarkComment' => 'https://api.weixin.qq.com/cgi-bin/comment/unmarkelect?access_token=ACCESS_TOKEN',
        //删除评论 请求方式 POST
        'MediaDeleteComment' => 'https://api.weixin.qq.com/cgi-bin/comment/delete?access_token=ACCESS_TOKEN',
        //回复评论 请求方式 POST
        'MediaReplyComment' => 'https://api.weixin.qq.com/cgi-bin/comment/reply/add?access_token=ACCESS_TOKEN',
        //删除回复 请求方式 POST
        'MediaDeleteReply' => 'https://api.weixin.qq.com/cgi-bin/comment/reply/delete?access_token=ACCESS_TOKEN',
        //微信网页授权-用户同意授权，获取code 请求方式 GET/header
        'UserGetCode' => 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect',
        //微信网页授权-用户通过code换取网页 token 请求方式 GET
        'UserAccessToken' => 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=APPSECRET&code=CODE&grant_type=authorization_code',
        //微信网页授权-用户通过refresh_token刷新 access_token 请求方式 GET
        'RefreshToken' => 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=APPID&grant_type=refresh_token&refresh_token=REFRESH_TOKEN',
        //拉取用户信息(需scope为 snsapi_userinfo) 请求方式 GET
        'UserInfo' => 'https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN',
        //检测 微信授权的 access_token 是否过期
        'CheckAccessToken' => 'https://api.weixin.qq.com/sns/auth?access_token=ACCESS_TOKEN&openid=OPENID',
        //一次性订阅消息 请求方式 GET/header
        'Subscribemsg' => 'https://mp.weixin.qq.com/mp/subscribemsg?action=get_confirm&appid=APPID&scene=SCENE&template_id=TEMPLATE_ID&redirect_url=REDIRECT_URL&reserved=RESERVED#wechat_redirect',
        //通过API推送订阅模板消息给到授权微信用户 请求方式 POST
        'SubscribeTemplate' => 'https://api.weixin.qq.com/cgi-bin/message/template/subscribe?access_token=ACCESS_TOKEN',
        //公众号调用或第三方平台帮公众号调用对公众号的所有api调用（包括第三方帮其调用）次数进行清零 请求方式 POST
        'ClearQuota' => 'https://api.weixin.qq.com/cgi-bin/clear_quota?access_token=ACCESS_TOKEN',
        //用户标签-创建标签 请求方式 POST
        'UserTagsCreate' => 'https://api.weixin.qq.com/cgi-bin/tags/create?access_token=ACCESS_TOKEN',
        //获取公众号已创建的标签 请求方式 GET
        'UserTagsGet' => 'https://api.weixin.qq.com/cgi-bin/tags/get?access_token=ACCESS_TOKEN',
        //编辑标签 请求方式 POST
        'UserTagsUpdate' => 'https://api.weixin.qq.com/cgi-bin/tags/update?access_token=ACCESS_TOKEN',
        //删除标签 请求方式 POST
        'UserTagsDelete' => 'https://api.weixin.qq.com/cgi-bin/tags/delete?access_token=ACCESS_TOKEN',
        //获取标签下粉丝列表 请求方式 GET
        'UserTagsFans' => 'https://api.weixin.qq.com/cgi-bin/user/tag/get?access_token=ACCESS_TOKEN',
        //批量为用户打标签 请求方式 POST
        'UserTagsMembers' => 'https://api.weixin.qq.com/cgi-bin/tags/members/batchtagging?access_token=ACCESS_TOKEN',
        //批量为用户取消标签 请求方式 POST
        'UserTagsUnmembers' => 'https://api.weixin.qq.com/cgi-bin/tags/members/batchuntagging?access_token=ACCESS_TOKEN',
        //获取用户身上的标签列表 请求方式 GET
        'UserTagslist' => 'https://api.weixin.qq.com/cgi-bin/tags/getidlist?access_token=ACCESS_TOKEN',
        //设置用户备注名 请求方式 POST
        'UserSetRemark' => 'https://api.weixin.qq.com/cgi-bin/user/info/updateremark?access_token=ACCESS_TOKEN',
        //获取用户基本信息（包括UnionID机制） 请求方式 GET
        'UserGetInfo' => 'https://api.weixin.qq.com/cgi-bin/user/info?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN',
        //批量获取用户信息 最多一次100条 请求方式 POST
        'UserGetInfos' => 'https://api.weixin.qq.com/cgi-bin/user/info/batchget?access_token=ACCESS_TOKEN',
        //获取用户列表 请求方式 GET
        'UserGetInfolist' => 'https://api.weixin.qq.com/cgi-bin/user/get?access_token=ACCESS_TOKEN&next_openid=NEXT_OPENID',
        //获取公众号黑名单列表 请求方式 GET
        'UserGetBlack' => 'https://api.weixin.qq.com/cgi-bin/tags/members/getblacklist?access_token=ACCESS_TOKEN',
        //拉黑用户 请求方式 POST
        'UserSetBlack' => 'https://api.weixin.qq.com/cgi-bin/tags/members/batchblacklist?access_token=ACCESS_TOKEN',
        //取消拉黑用户 请求方式 POST
        'UserSetUnblack' => 'https://api.weixin.qq.com/cgi-bin/tags/members/batchunblacklist?access_token=ACCESS_TOKEN',
        //创建二维码ticket 请求方式 POST
        'QrcodeCreate' => 'https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=ACCESS_TOKEN',
        //通过ticket换取二维码 二维码图片
        'Qrcode' => 'https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=TICKET',
        //长链接转短链接接口 请求方式 POST
        'ShortUrl' => 'https://api.weixin.qq.com/cgi-bin/shorturl?access_token=ACCESS_TOKEN',
        //获取用户增减数据 请求方式 POST
        'GetUserSummary' => 'https://api.weixin.qq.com/datacube/getusersummary?access_token=ACCESS_TOKEN',
        //获取累计用户数据 请求方式 POST
        'GetUserCumulate' => 'https://api.weixin.qq.com/datacube/getusercumulate?access_token=ACCESS_TOKEN',
        //获取图文群发每日数据 请求方式 POST
        'GetArticleSummary' => 'https://api.weixin.qq.com/datacube/getarticlesummary?access_token=ACCESS_TOKEN',
        //获取图文群发总数据 请求方式 POST
        'GetArticleTotal' => 'https://api.weixin.qq.com/datacube/getarticletotal?access_token=ACCESS_TOKEN',
        //获取图文统计数据 请求方式 POST
        'GetUserRead' => 'https://api.weixin.qq.com/datacube/getuserread?access_token=ACCESS_TOKEN',
        //获取图文统计分时数据 请求方式 POST
        'GetUserReadhour' => 'https://api.weixin.qq.com/datacube/getuserreadhour?access_token=ACCESS_TOKEN',
        //获取图文分享转发数据 请求方式 POST
        'GetUserShare' => 'https://api.weixin.qq.com/datacube/getusershare?access_token=ACCESS_TOKEN',
        //获取图文分享转发分时数据 请求方式 POST
        'GetUserSharehour' => 'https://api.weixin.qq.com/datacube/getusershare?access_token=ACCESS_TOKEN',
        //获取消息发送概况数据 请求方式 POST
        'GetUpstreammsg' => 'https://api.weixin.qq.com/datacube/getupstreammsg?access_token=ACCESS_TOKEN',
        //获取消息分送分时数据 请求方式 POST
        'GetUpstreammsghour' => 'https://api.weixin.qq.com/datacube/getupstreammsghour?access_token=ACCESS_TOKEN',
        //获取消息发送周数据 请求方式 POST
        'GetUpstreammsgweek' => 'https://api.weixin.qq.com/datacube/getupstreammsgweek?access_token=ACCESS_TOKEN',
        //获取消息发送月数据 请求方式 POST
        'GetUpstreammsgmonth' => 'https://api.weixin.qq.com/datacube/getupstreammsgmonth?access_token=ACCESS_TOKEN',
        //获取消息发送分布数据 请求方式 POST
        'GetUpstreammsgdist' => 'https://api.weixin.qq.com/datacube/getupstreammsgdist?access_token=ACCESS_TOKEN',
        //获取消息发送分布周数据 请求方式 POST
        'GetUpstreammsgdistweek' => 'https://api.weixin.qq.com/datacube/getupstreammsgdistweek?access_token=ACCESS_TOKEN',
        //获取消息发送分布月数据 请求方式 POST
        'GetUpstreammsgdistmonth' => 'https://api.weixin.qq.com/datacube/getupstreammsgdistmonth?access_token=ACCESS_TOKEN',
        //获取接口分析数据 请求方式 POST
        'GetInterfaceSummary' => 'https://api.weixin.qq.com/datacube/getinterfacesummary?access_token=ACCESS_TOKEN',
        //获取接口分析分时数据 请求方式 POST
        'GetInterfaceSummaryhour' => 'https://api.weixin.qq.com/datacube/getinterfacesummaryhour?access_token=ACCESS_TOKEN',
        //创建卡劵 请求方式 POST
        'CardCreate' => 'https://api.weixin.qq.com/card/create?access_token=ACCESS_TOKEN',
        //设置买单接口 请求方式 POST
        'PaycellSet' => 'https://api.weixin.qq.com/card/paycell/set?access_token=ACCESS_TOKEN',
        //设置自助核销接口 请求方式 POST
        'SetSelfconsumecell' => 'https://api.weixin.qq.com/card/selfconsumecell/set?access_token=ACCESS_TOKEN',
        //卡劵创建二维码接口 请求方式 POST
        'CardQrcodeCreate' => 'https://api.weixin.qq.com/card/qrcode/create?access_token=ACCESS_TOKEN',
        //创建货架接口 请求方式 POST
        'CreateLandingpage' => 'https://api.weixin.qq.com/card/landingpage/create?access_token=ACCESS_TOKEN',
        //导入code 请求方式 POST
        'CodeDeposit' => 'http://api.weixin.qq.com/card/code/deposit?access_token=ACCESS_TOKEN',
        //查询导入code数目接口 请求方式 POST
        'CodeGetdepositcount' => 'http://api.weixin.qq.com/card/code/getdepositcount?access_token=ACCESS_TOKEN',
        //核查code接口 请求方式 POST
        'CodeCheck' => 'http://api.weixin.qq.com/card/code/checkcode?access_token=ACCESS_TOKEN',
        //图文消息群发卡券 请求方式 POST
        'MpnewsGethtml' => 'https://api.weixin.qq.com/card/mpnews/gethtml?access_token=ACCESS_TOKEN',
        //设置测试白名单 请求方式 POST
        'TestwhitelistSet' => 'https://api.weixin.qq.com/card/testwhitelist/set?access_token=ACCESS_TOKEN',
        //线下核销 查询Code接口 请求方式 POST
        'CodeGet' => 'https://api.weixin.qq.com/card/code/get?access_token=ACCESS_TOKEN',
        //线下核销 核销Code接口 请求方式 POST
        'CodeConsume' => 'https://api.weixin.qq.com/card/code/consume?access_token=ACCESS_TOKEN',
        //Code解码接口 请求方式 POST
        'CodeDecrypt' => 'https://api.weixin.qq.com/card/code/decrypt?access_token=ACCESS_TOKEN',
        //获取用户已领取卡券接口 请求方式 POST
        'CardUserGetcardlist' => 'https://api.weixin.qq.com/card/user/getcardlist?access_token=ACCESS_TOKEN',
        //查看卡券详情 请求方式 POST
        'CardDetails' => 'https://api.weixin.qq.com/card/get?access_token=ACCESS_TOKEN',
        //批量查询卡券列表 请求方式 POST
        'CardBatchget' => 'https://api.weixin.qq.com/card/batchget?access_token=ACCESS_TOKEN',
        //更改卡券信息接口 请求方式 POST
        'CardUpdate' => 'https://api.weixin.qq.com/card/update?access_token=ACCESS_TOKEN',
        //修改库存接口 请求方式 POST
        'CardModifyStock' => 'https://api.weixin.qq.com/card/modifystock?access_token=ACCESS_TOKEN',
        //更改Code接口 请求方式 POST
        'CodeUpdate' => 'https://api.weixin.qq.com/card/code/update?access_token=ACCESS_TOKEN',
        //删除卡券接口 请求方式 POST
        'CardDelete' => 'https://api.weixin.qq.com/card/delete?access_token=ACCESS_TOKEN',
        //设置卡券失效接口 请求方式 POST
        'CardUnavailable' => 'https://api.weixin.qq.com/card/code/unavailable?access_token=ACCESS_TOKEN',
        //拉取卡券概况数据接口 请求方式 POST
        'GetCardBizuininfo' => 'https://api.weixin.qq.com/datacube/getcardbizuininfo?access_token=ACCESS_TOKEN',
        //获取免费券数据接口 请求方式 POST
        'GetCardCardinfo' => 'https://api.weixin.qq.com/datacube/getcardcardinfo?access_token=ACCESS_TOKEN',
        //拉取会员卡概况数据接口 请求方式 POST
        'GetCardMemberCardinfo' => 'https://api.weixin.qq.com/datacube/getcardmembercardinfo?access_token=ACCESS_TOKEN',
        //拉取单张会员卡数据接口 请求方式 POST
        'GetCardMemberCardDetails' => 'https://api.weixin.qq.com/datacube/getcardmembercarddetail?access_token=ACCESS_TOKEN',
        //创建卡公众号的token 请求方式 POST
        'CardGeturl'=>'https://api.weixin.qq.com/card/membercard/activate/geturl?access_token=ACCESS_TOKEN',
        //获取用户开卡时提交的信息（跳转型开卡组件） 请求方式 POST
        'CardSubmitInfoJump'=>'https://api.weixin.qq.com/card/membercard/activatetempinfo/get?access_token=ACCESS_TOKEN',
        //获取用户开卡时提交的信息（非跳转型开卡组件）
        'CardSubmitInfo'=>'https://api.weixin.qq.com/card/code/get?access_token=ACCESS_TOKEN',
        //激活用户领取的会员卡（跳转型开卡组件）
        'CardActivate'=>'https://api.weixin.qq.com/card/membercard/activate?access_token=ACCESS_TOKEN',
        //创建子商户接口 请求方式 POST
        'SubMerchant' => 'https://api.weixin.qq.com/card/submerchant/submit?access_token=ACCESS_TOKEN',
        //卡券开放类目查询接口 请求方式get
        'GetApplyProtocol'=>'https://api.weixin.qq.com/card/getapplyprotocol?access_token=TOKEN',
    ];
    //url替换
    private static $url;
    //请求之后的数据
    public $data;
    public $callback_run;
    //数据类型
    private $type = 'json';


    /**
     * 微信接口地址
     * @param $option //指定的微信接口配置
     * @param $config //匹配参数
     * @return string //匹配后的url
     */
    public function __construct($option, $config)
    {
        $this->callback_run = $config['run']??[];
        $url = self::url2apiurl(self::API[$option]??$option, $config);
        self::$url = $url;
    }

    /**
     * @return $this
     * 微信get请求
     */
    public function get()
    {
        $this->data = Tool::get(self::$url);
        return $this;
    }

    /**
     * @param array $options
     * @param string $type
     * @return $this
     * 微信 post请求
     */
    public function post(array $options, $type = 'json')
    {

        $this->type = $type;
        if ($this->type == 'json') {
            $options = Tool::arr2json($options);
        } else {
            $options = Tool::arr2xml($options);
        }
        $this->data = Tool::post(self::$url, $options);
        return $this;
    }

    /**
     * @param $file
     * @param string $key
     * @param string $type
     * @return $this
     * 表单上传文件
     */
    public function file($file, $key = 'media')
    {
        $options = [$key => Tool::createCurlFile($file)];
        $this->data = Tool::post(self::$url, $options);

        return $this;
    }

    /**
     * @return array
     * @throws \Exception
     * 转数组
     */
    public function toArray()
    {
        if ($this->type == 'json') {
            $data = Tool::json2arr($this->data);
            $data['callback_run'] = $this->callback_run;
            return $data;
        } else {
            $data = Tool::xml2arr($this->data);
            $data['callback_run'] = $this->callback_run;
            return $data;
        }
    }

    /**
     * @return mixed
     * 输出url
     */
    public function toUrl()
    {
        return self::$url;
    }
    /**
     * @param $url
     * @param $config
     * @return string
     * url转apiurl
     */
    private function url2apiurl($url, $config)
    {
        if (strpos($url, '?') === false) return $url;
        $start_url = substr($url, 0, strrpos($url, '?'));
        $end_url = strstr($url, '?');
        $param = explode('&', $end_url);
        foreach ($param as &$vs) {
            $v = explode('=', $vs);
            $v[1] = $config[strtolower($v[1])]??$v[1];
            $vs = implode('=', $v);
        }
        $end_url = implode('&', $param);
        return $start_url . $end_url;
    }

}