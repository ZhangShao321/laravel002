/**
 * 检测验证码
 *
 * @param obj
 * @param errorMessageObj
 * @param length
 * @returns {number}
 * @author zhangyuchao
 */
function checkVerifyCode(obj, errorMessageObj, length) {
    if (!isNull(obj.val())) return errorMessageObj.html('验证码不能为空');
    if (obj.val().length != length) return errorMessageObj.html('验证码长度不正确');
    errorMessageObj.html(' ');
    return 100
}

/**
 * 检测密码
 *
 * @param obj
 * @param errorMessageObj
 * @param length
 * @returns {number}
 * @author zhangyuchao
 */
function checkPassword(obj, errorMessageObj, length) {
    if (!isNull(obj.val())) return errorMessageObj.html('密码不能为空');
    if (obj.val().length < length) return errorMessageObj.html('密码长度不能小于' + length + '位');
    errorMessageObj.html(' ');
    return 100;
}
/**
 * 检测新密码
 *
 * @param obj
 * @param errorMessageObj
 * @param length
 * @returns {number}
 * @author zhangyuchao
 */
function checkNewPassword(obj, errorMessageObj, length) {
    if (!isNull(obj.val())) return errorMessageObj.html('新密码不能为空');
    if (obj.val().length < length) return errorMessageObj.html('新密码长度不能小于' + length + '位');
    errorMessageObj.html(' ');
    return 100;
}

/**
 * 检测旧密码格式
 *
 * @param obj
 * @param errorMessageObj
 * @param length
 * @returns {number}
 * @author zhangyuchao
 */
function checkOldPassword(obj, errorMessageObj, length) {
    if (!isNull(obj.val())) return errorMessageObj.html('旧密码不能为空');
    if (obj.val().length < length) return errorMessageObj.html('旧密码密码长度不能小于' + length + '位');
    errorMessageObj.html(' ');
    return 100;
}
/**
 * 验证确认密码
 *
 * @param obj
 * @param relObj
 * @param errorMessageObj
 * @param length
 * @returns {*}
 * @author zhangyuchao
 */
function checkRelPassword(obj, relObj, errorMessageObj, length) {
    if (!isNull(relObj.val())) return errorMessageObj.html('确认密码不能为空');
    if (relObj.val().length < length) return errorMessageObj.html('确认密码长度不能小于' + length + '位');
    if (obj.val() != relObj.val()) return errorMessageObj.html('两次密码输入不一致');
    errorMessageObj.html(' ');
    return 100;
}
/**
 * 检测手机号函数
 * param object  obj
 * return object
 */
function checkTel(obj, errorMessageObj) {
    if (!isNull(obj.val())) return errorMessageObj.html('手机号码不能为空');
    if (!isTel(obj.val()))  return errorMessageObj.html('手机号码格式不正确');
    errorMessageObj.html(' ');
    return 100;

}
/**
 * 验证字段是否为空
 *
 * @param s
 * @returns {boolean}
 * @author zhangyuchao
 */
function isNull(s) {
    if (s == "" || s == undefined || s == null) return false;
    return true
}
/**
 * 检测手机号码
 *
 * @param s
 * @returns {boolean}
 * @author zhangyuchao
 */
function isTel(s) {
    var patrn = /^(13|14|15|17|18)[0-9]{9}$/;
    if (!patrn.exec(s)) return false;
    return true;
}

/**
 * 检测邮件函数
 *
 * @param obj
 * @param errorMessageObj
 * @returns {number}
 * @author zhangyuchao
 */
function checkEmail(obj, errorMessageObj) {
    if (!isNull(obj.val())) return errorMessageObj.html('邮箱不能为空');
    if (!isEmail(obj.val()))  return errorMessageObj.html('邮箱格式不正确');
    errorMessageObj.html(' ');
    return 100;
}
/**
 * 判断邮件函数
 *
 * @param strEmail
 * @returns {boolean}
 * @author zhangyuchao
 */
function isEmail(strEmail) {
    if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
        return true;
    else
        return false;
}
/**
 * 检测身份证号函数
 *
 * @param obj
 * @param errorMessageObj
 * @returns {number}
 */
function checkIdCard(obj,errorMessageObj)
{
    if (!isNull(obj.val())) return errorMessageObj.html('身份证号码不能为空');
    if (!checkIdentity(obj.val()))  return errorMessageObj.html('身份证号码格式不正确');
    errorMessageObj.html(' ');
    return 100;
}
/**
 * 简单验证身份证号
 *
 * @param identity
 * @returns {boolean}
 */
function checkIdentity(identity){
    var reg = /^[1-9]{1}[0-9]{14}$|^[1-9]{1}[0-9]{16}([0-9]|[xX])$/;
    if(reg.test(identity)){
        return true;
    }else{
        return false;
    }
}