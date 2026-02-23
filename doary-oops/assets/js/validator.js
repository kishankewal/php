var Validator = {
    isValidateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{1,}))$/;
        return re.test(String(email).toLowerCase());
    },
    validateEmailForCom(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{3,}))$/;
        return re.test(String(email).toLowerCase());
    },
    validatePhoneNumber(phoneNumber){
        if(phoneNumber.isInteger == false){
            return false;
        } else if(phoneNumber.length != DENMARK_PHONE_NUMBER_LENGTH){
			return false;
        }
		return true;
    },
    validateURL(str) {
        var pattern = new RegExp('^(https?:\\/\\/)?'+
          '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+
          '((\\d{1,3}\\.){3}\\d{1,3}))'+
          '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+
          '(\\?[;&a-z\\d%_.~+=-]*)?'+
          '(\\#[-a-z\\d_]*)?$','i');
        return !!pattern.test(str);
    }, 
    validatePhoneNumberForWorld(phoneNumber){
        if(Number.isInteger(phoneNumber) == false){
            return false;
        } else if(phoneNumber.toString().length < DENMARK_PHONE_NUMBER_LENGTH){
			return false;
        }
		return true;
    },
    cleanWhiteSpace(text){
        return text.split(/\s/g)[0];
    },
    refineText(email){
        email = email.replace(/['"]+/g, '');
        return email;
    },
    removeEmojis(str) {
        return str.replace( /([\u2700-\u27BF]|[\uE000-\uF8FF]|[\uD83C\uD000-\uDFFF\uDC00-\uDFFF]|[\u2011-\u26FF]|\uFE0F|\u200D)/g, '');
    },
    isValidNonEmptyObject(obj) {
        return obj !== null && typeof obj === 'object' && !Array.isArray(obj) && Object.keys(obj).length > 0;
    }
}