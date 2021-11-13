// grunt version
// npm version ? specific version of node 
// windows installation of nvm ? to manage version used
// try node 14.15 for grunt 
// 
// module theme_intuitable/cohort.js
define(['jquery'], function($) {
    return {
        init: function() {
            console.log("cohort.js init");
            $("#id_config_cohorts").change(function() {
                var $cohortid =  $(this).val();
                var $cohorttext =  $(this).text();
                console.log("filter cohort id "+$cohortid+' : '+$cohorttext);
            });
        }
    };
});