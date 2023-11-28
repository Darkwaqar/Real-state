// User Registration Form

document.addEventListener('DOMContentLoaded', function(e) {

    const form = document.getElementById('simpleUser');

    FormValidation.formValidation(form, {

        framework: "bootstrap4",

        // icon: {

        //     valid: 'glyphicon glyphicon-ok',

        //     invalid: 'glyphicon glyphicon-remove',

        //     validating: 'glyphicon glyphicon-refresh'

        // },

        fields: {

            first_name: {

                validators: {

                    notEmpty: {

                        message: 'Your first name is required'

                    }

                }

            },

            last_name: {

                validators: {

                    notEmpty: {

                        message: 'Your last name is required'

                    }

                }

            },

            email: {

                validators: {

                    notEmpty: {

                        message: 'Your email address is required'

                    },

                    emailAddress: {

                        message: 'This email is not a valid email address.'

                    }

                }

            },

            mobile_number: {

                validators: {

                    notEmpty: {

                        message: 'Your number is required' 

                    }

                }

            },

            passsword: {

                validators: {

                    notEmpty: {

                        message: 'Your password is required'

                    },

                    stringLength: {

                        min: 5,

                        message: 'Your password requires five characters in length.',

                    },

                }

            },

            confirm_password: {

                validators: {

                    identical: {

                        compare: function() {

                            return form.querySelector('[name="passsword"]').value;

                        },

                        message: 'The same attributes must be in your password and confirm password field.'

                    }

                }

            },

            address: {

                validators: {

                    notEmpty: {

                        message: 'Your address is required'

                    }

                }

            },

            country: {

                validators: {

                    notEmpty: {

                        message: 'Your country is required'

                    }

                }

            },

            state: {

                validators: {

                    notEmpty: {

                        message: 'Your state is required'

                    }

                }

            },

            city: {

                validators: {

                    notEmpty: {

                        message: 'Your city is required'

                    }

                }

            },

            postal_code: {

                validators: {

                    notEmpty: {

                        message: 'Your zip code is required'

                    }

                }

            },

            hear_about_us: {

                validators: {

                    notEmpty: {

                        message: 'How Did You Hear About Us? field is required'

                    }

                }

            },

            agreeTermCon: {

                validators: {

                    notEmpty: {

                        message: 'Please accept our terms and conditions/privacy policy to further proceeding.'

                    }

                }

            },

        },

        plugins: {

            trigger: new FormValidation.plugins.Trigger(),

            // bootstrap: new FormValidation.plugins.Bootstrap(), 

            defaultSubmit: new FormValidation.plugins.DefaultSubmit(),

            icon: new FormValidation.plugins.Icon({

                valid: 'fa fa-check',

                invalid: 'fa fa-times',

                validating: 'fa fa-refresh',

            }),

            submitButton: new FormValidation.plugins.SubmitButton(),

            message: new FormValidation.plugins.Message({

                clazz: 'red lh-copy',

                container: '#skzmessages',

            }),

            

        },



    });



    

});





// Agent Form


// Contact Form

document.addEventListener('DOMContentLoaded', function(e) {

    const form3 = document.getElementById('contactForm');

    FormValidation.formValidation(form3, {

        framework: "bootstrap4",

        // icon: {

        //     valid: 'glyphicon glyphicon-ok',

        //     invalid: 'glyphicon glyphicon-remove',

        //     validating: 'glyphicon glyphicon-refresh'

        // },

        fields: {

            name: {

                validators: {

                    notEmpty: {

                        message: 'Your name is required'

                    }

                }

            },

    

            email: {

                validators: {

                    notEmpty: {

                        message: 'Your email address is required'

                    },

                    emailAddress: {

                        message: 'This email is not a valid email address.'

                    }

                }

            },

            phone: {

                validators: {

                    notEmpty: {

                        message: 'Your phone number is required'

                    }

                }

            },



            city: {

                validators: {

                    notEmpty: {

                        message: 'Your city is required'

                    }

                }

            },



            message: {

                validators: {

                    notEmpty: {

                        message: 'Your message is required'

                    }

                }

            },

        

        },

        plugins: {

            trigger: new FormValidation.plugins.Trigger(),

            //bootstrap: new FormValidation.plugins.Bootstrap(),

            defaultSubmit: new FormValidation.plugins.DefaultSubmit(),

            icon: new FormValidation.plugins.Icon({

                valid: 'fa fa-check',

                invalid: 'fa fa-times',

                validating: 'fa fa-refresh',

            }),

            submitButton: new FormValidation.plugins.SubmitButton(),

            message: new FormValidation.plugins.Message({

                clazz: 'red lh-copy',

                container: '#skzmessages2',

            }),



        },



    });



    

});





// Property Form

document.addEventListener('DOMContentLoaded', function(e) {

    const form4 = document.getElementById('propertyForm');

    FormValidation.formValidation(form4, {

        framework: "bootstrap4",

        // icon: {

        //     valid: 'glyphicon glyphicon-ok',

        //     invalid: 'glyphicon glyphicon-remove',

        //     validating: 'glyphicon glyphicon-refresh'

        // },

        fields: {

            // hometype: {

            //     validators: {

            //         notEmpty: {

            //             message: 'Home type is required'

            //         }

            //     }

            // },

    

            PropertySubType: {

                validators: {

                    notEmpty: {

                        message: 'Home sub type is required'

                    },

                }

            },

            SellingPrice: {

                validators: {

                    notEmpty: {

                        message: 'Selling price is required'

                    }

                }

            },



            HOAdues: {

                validators: {

                    notEmpty: {

                        message: 'HOA Dues is required'

                    }

                }

            },



            Beds: {

                validators: {

                    notEmpty: {

                        message: 'Beds is required'

                    }

                }

            },

            FullBaths: {

                validators: {

                    notEmpty: {

                        message: 'Full baths is required'

                    }

                }

            },

            OneQuarter: {

                validators: {

                    notEmpty: {

                        message: '3/4 baths is required'

                    }

                }

            },

            halfbaths: {

                validators: {

                    notEmpty: {

                        message: '1/2 baths is required'

                    }

                }

            },

            threeQuarter: {

                validators: {

                    notEmpty: {

                        message: '1/4 is required'

                    }

                }

            },

            LotSize: {

                validators: {

                    notEmpty: {

                        message: 'Lot size is required'

                    }

                }

            },

            Finishedsquarefeet: {

                validators: {

                    notEmpty: {

                        message: 'Square feet is required'

                    }

                }

            },

            YearBuilt: {

                validators: {

                    notEmpty: {

                        message: 'Year Built is required'

                    }

                }

            },

            

            TaxYear: {

                validators: {

                    notEmpty: {

                        message: 'Tax year is required'

                    }

                }

            },

            TaxAnnualAmount: {

                validators: {

                    notEmpty: {

                        message: 'Tax Annual Amount is required'

                    }

                }

            },

            EffectiveYearBuilt: {

                validators: {

                    notEmpty: {

                        message: 'Effective Year Built is required'

                    }

                }

            },

            TotalRooms: {

                validators: {

                    notEmpty: {

                        message: 'Total Rooms is required'

                    }

                }

            },

            // VirtualTourURL: {

            //     validators: {

            //         notEmpty: {

            //             message: 'Virtual Tour URL is required'

            //         }

            //     }

            // },

            description: {

                validators: {

                    notEmpty: {

                        message: 'Description is required'

                    }

                }

            },

            photos: {

                validators: {

                    notEmpty: {

                        message: 'Photos is required'

                    }

                }

            },

            appliance: {

                validators: {

                    notEmpty: {

                        message: 'Appliance is required'

                    }

                }

            },

            // basement: {

            //     validators: {

            //         notEmpty: {

            //             message: 'Basement is required'

            //         }

            //     }

            // },

            floor: {

                validators: {

                    notEmpty: {

                        message: 'Floor is required'

                    }

                }

            },

            PropertyRooms: {

                validators: {

                    notEmpty: {

                        message: 'Property Rooms is required'

                    }

                }

            },

            community: {

                validators: {

                    notEmpty: {

                        message: 'Community is required'

                    }

                }

            },

            // ArchitecturalStyle: {

            //     validators: {

            //         notEmpty: {

            //             message: 'Architectural Style is required'

            //         }

            //     }

            // },



            exteriorFeatures: {

                validators: {

                    notEmpty: {

                        message: 'Exterior Features is required'

                    }

                }

            },

            outDoor: {

                validators: {

                    notEmpty: {

                        message: 'Out door is required'

                    }

                }

            },

            parking: {

                validators: {

                    notEmpty: {

                        message: 'Parking is required'

                    }

                }

            },

            roof: {

                validators: {

                    notEmpty: {

                        message: 'Roof is required'

                    }

                }

            },

            propertyview: {

                validators: {

                    notEmpty: {

                        message: 'Property view is required'

                    }

                }

            },

            propertycooling: {

                validators: {

                    notEmpty: {

                        message: 'Property cooling is required'

                    }

                }

            },

            propertyheating: {

                validators: {

                    notEmpty: {

                        message: 'Property heating is required'

                    }

                }

            },

            propertyfuel: {

                validators: {

                    notEmpty: {

                        message: 'Property fuel is required'

                    }

                }

            },

            Address: {

                validators: {

                    notEmpty: {

                        message: 'Address is required'

                    }

                }

            },

            City: {

                validators: {

                    notEmpty: {

                        message: 'City is required'

                    }

                }

            },

            State: {

                validators: {

                    notEmpty: {

                        message: 'State is required'

                    }

                }

            },

            CountyOrParish: {

                validators: {

                    notEmpty: {

                        message: 'CountyOrParish is required'

                    }

                }

            },

            zipCode: {

                validators: {

                    notEmpty: {

                        message: 'Zip Code is required'

                    }

                }

            },

            Longitude: {

                validators: {

                    notEmpty: {

                        message: 'Longitude is required'

                    }

                }

            },

            Latitude: {

                validators: {

                    notEmpty: {

                        message: 'Latitude is required'

                    }

                }

            },

            Street: {

                validators: {

                    notEmpty: {

                        message: 'Street is required'

                    }

                }

            },

            MLSArea: {

                validators: {

                    notEmpty: {

                        message: 'MLSArea is required'

                    }

                }

            },

            Topography: {

                validators: {

                    notEmpty: {

                        message: 'Topography is required'

                    }

                }

            },

            PowerCompany: {

                validators: {

                    notEmpty: {

                        message: 'Power Company is required'

                    }

                }

            },

            SewerCompany: {

                validators: {

                    notEmpty: {

                        message: 'Sewer Company is required'

                    }

                }

            },

            HighSchoolDistrict: {

                validators: {

                    notEmpty: {

                        message: 'High School District is required'

                    }

                }

            },

            highSchool: {

                validators: {

                    notEmpty: {

                        message: 'High School is required'

                    }

                }

            },

            MiddleOrJuniorSchool: {

                validators: {

                    notEmpty: {

                        message: 'Middle Or Junior School is required'

                    }

                }

            },

            ElementarySchool: {

                validators: {

                    notEmpty: {

                        message: 'Elementary School is required'

                    }

                }

            },





        

        },

        plugins: {

            trigger: new FormValidation.plugins.Trigger(),

            //bootstrap: new FormValidation.plugins.Bootstrap(),

            defaultSubmit: new FormValidation.plugins.DefaultSubmit(),

            icon: new FormValidation.plugins.Icon({

                valid: 'fa fa-check',

                invalid: 'fa fa-times',

                validating: 'fa fa-refresh',

            }),

            submitButton: new FormValidation.plugins.SubmitButton(),

            message: new FormValidation.plugins.Message({

                clazz: 'red lh-copy',

                container: '#skzmessages3',

            }),



        },



    });



    

});

// .on('core.validator.validated', function(e) {

//     if (!e.result.valid) {

//         // Query all messages

//         const messages = [].slice.call(demoForm.querySelectorAll('[data-field="' + e.field + '"][data-validator]'));



//         messages.forEach((messageEle) => {





//             const validator = messageEle.getAttribute('data-validator');

//             messageEle.style.display = validator === e.validator ? 'block' : 'none';

//         });

//     }

// });

