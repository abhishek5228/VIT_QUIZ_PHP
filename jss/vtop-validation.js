/*
 * Author: Anthoniraj Amalanathan
 * Date Last Modified: 15-02-2017
 * Base Library: Bootstrap Validator.
 */

var rules={
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            name: {
	                message: 'The given name is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The name is required and can\'t be empty'
	                    },
	                    stringLength: {
	                        min: 5,
	                        max: 11,
	                        message: 'The name must be more than 3 and less than 50 characters long'
	                    },
	                    /*remote: {
	                        url: 'remote',
	                        message: 'The username is not available'
	                    },*/
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    }
	                }
	            },
	            email: {
	                validators: {
	                    notEmpty: {
	                        message: 'The email address is required and can\'t be empty'
	                    },
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    }
	                   
	                }
	            },
	            
	            url: {
	                validators: {
	                    notEmpty: {
	                        message: 'The website address is required and can\'t be empty'
	                    },
	                    uri: {
	                        message: 'The input is not a valid website address'
	                    }
	                   
	                }
	            },
	            
	            uname:{
	            	validators: {
	                    notEmpty: {
	                        message: 'The username is required and can\'t be empty'
	                    },	                    
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9]{4,12}$/,
	                        message: 'The username can only consist of Alphanumeric',
	                        message: 'The username must be between 4 and 12'
	                    }
	                }
	            },
	            
	            passwd: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and can\'t be empty'
	                    },
		                stringLength: {
	                        min: 8,
	                        max: 30,
	                        message: 'The password must be minimum 8 and maximum 30 characters long'
	                    }
	                }
	            },
	            choice: {
	                validators: {	                    
		                choice: {
	                        min: 1,
	                        max: 1,
	                        message: 'Atleast onc choice must be selected'
	                    }
	                }
	            },	            
	            date:{
	            	validators: {
		            	notEmpty: {
	                        message: 'The date is required and can\'t be empty'
	                    },
	                    date: {
	                    	format:'DD/MM/YYYY',
	                        message: 'The input is not a valid date'
	                    }
	            	}
	            },
	            mobile: {
	                message: 'The mobile number is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The mobile number is required and can\'t be empty'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    },
	                    regexp: {
	                        regexp: /^[789]\d{9}$/,
	                        message: 'The mobile number is exactly 10 digits and starts with only 7/8/9'
	                    }
	                }
	            },
	            
	            intercom: {
	                message: 'The intercom number is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The intercom number is required and can\'t be empty'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    },
	                    regexp: {
	                        regexp: /^[2]\d{3}$/,
	                        message: 'The intercom number is exactly 4 digits and starts with only 2 in VIT'
	                    }
	                }
	            },
	            
	            creditCard: {
	                validators: {
	                    notEmpty: {
	                        message: 'The card number is required and can\'t be empty'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    },
	                    creditCard: {
	                        message: 'The input is not a valid card number'
	                    }
	                   
	                }
	            },
	            pincode: {
	                message: 'The pincode is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The pincode is required and can\'t be empty'
	                    },								                        
	                    regexp: {
	                        regexp: /^[0-9]{6}$/,
	                        message: 'The pincode is exactly 6 digits'
	                    }
	                }
	            },           
	       
	             country: {
	                  message: "Country is required",
	                  validators: {
		                    notEmpty: {
		                      message: "Please provide a Country"
		                    },
		                    choice: {
		                      min: 1,
		                      max: 1,
		                      message: "Please provide a Country"
		                    }
		              }
	             },		              
	            
	            catMark: {
	                validators: {
	                    notEmpty: {
	                        message: 'The mark is required and can\'t be empty'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    },
		                between: {
	                        min: 0,
	                        max: 50,
	                        message: 'The mark must be between 0 and 50'
	                    }
	                }
	            },
	            
	            fatMark: {
	                validators: {
	                    notEmpty: {
	                        message: 'The mark is required and can\'t be empty'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    },
		                between: {
	                        min: 0,
	                        max: 100,
	                        message: 'The mark must be between 0 and 100'
	                    }
	                }
	            },
	            
	            empId: {
	                validators: {
	                    notEmpty: {
	                        message: 'The empid is required and can\'t be empty'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    },
	                    stringLength: {
	                        min: 5,
	                        max: 5,
	                        message: 'The empid must be exactly 5 Digits'
	                    }
	                }
	            },
	            
	            regno: {
	                validators: {
	                    notEmpty: {
	                        message: 'The regno is required and can\'t be empty'
	                    },
	                    regexp: {
	                        regexp: /^\d{2}[A-Z]{3}\d{3,4}$/,
	                        message: 'The regno starts with number, must be more than 8 and less than 10 characters long',
	                        
	                    }	                    
	                }
	            },
	            newPwd: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and can\'t be empty'
	                    },
		                stringLength: {
	                        min: 9,
	                        max: 30,
	                        message: 'The password must be more than 9 and less than 30 characters long'
	                    }
	                }
	            },
	            cnfrmNewPwd: {
	                validators: {
	                    notEmpty: {
	                        message: 'The confirm password is required and can\'t be empty'
	                    },
		                stringLength: {
	                        min: 9,
	                        max: 30,
	                        message: 'The confirm password must be more than 9 and less than 30 characters long'
	                    }
	                }
	            },
	            otpMobile: {
	                validators: {
	                    notEmpty: {
	                        message: 'OTP received in Mobile is required'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    }
	                }
	            },
	            otpEmail: {
	                validators: {
	                    notEmpty: {
	                        message: 'OTP received in Email is required'
	                    },
	                    digits:{
	                    	message:'Please enter only digits'
	                    }
	                }
	            },
	            captchaCheck: {
	                validators: {
	                    notEmpty: {
	                        message: 'Captcha is required'
	                    }
	                }
	            },
	            
	        }
	    };