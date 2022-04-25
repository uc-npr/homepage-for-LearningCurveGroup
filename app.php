<?php
/**
 *   File Name    : App.php
 *   Description  : UI file
 *   Author       : Nishant Pundir
 *   Version      : 1
 *   Created      : 24 Mar 2022
 *   Updated By   : Nishant Pundir <nishant.pundir@ucertify.com>
 *   Updated Date : 24 Mar 2022
 */

require_once '.\smarty\libs\Smarty.class.php';
$smarty = new Smarty();

$productcategory = array(
    array(
        'name' => 'Bootcamps',
        'image' => 'boot.jpg',
        'description' => 'Bootcamp description Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, soluta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, soluta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, soluta!',
        'code' => 'bootcamp',
    ),
    array(
        'name' => 'Projests',
        'image' => 'project.jpg',
        'description' => 'Projest description Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, soluta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, soluta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, soluta!',
        'code' => 'project',
    ),
);

$productlist = array(
    "bootcamp" => array(
        array(
            "name" => "Desktop Bootcamp",
            "image" => "deskboot.jpg",
            "code" => "desktop-bootcamp",
            "course" => array(
                "Windows Operating Systems Fundamentals, (98-349)",
                "ITIL 4, (ITIL-4)",
                "Effective Helpdesk (eff-help-desk)"
            )
        ),
        array(
            "name" => "Network Bootcamp",
            "image" => "netboot.jpg",
            "code" => "network-bootcamp",
            "course" => array(
                "Networking Fundamentals, (98-349)",
                "ITIL 4, (ITIL-4)",
                "Effective Helpdesk (eff-help-desk)"
            ),
        ),
        array(
            "name" => "Cloud Bootcamp",
            "image" => "cloudboot.jpg",
            "code" => "cloud-bootcamp",
            "course" => array(
                "Azure Fundamentals, (AZ-900.AB1)",
                "Cloud+, (CV0-001)",
                "Effective Helpdesk (eff-help-desk)"
            ),
        ),
        array(
            "name" => "Digital Marketing Bootcamp",
            "image" => "dmboot.jpg",
            "code" => "digital-marketing-bootcamp",
            "course" => array(
                "ICT Web Design Essentials, (ICT-web-design)",
                "HTML5 Application Development Fundamentals, (98-375)",
                "CIW => Social Media Strategist (1D0-623)"
            ),
        ),
        array(
            "name" => "Security Bootcamp",
            "image" => "securityboot.jpg",
            "code" => "security-boot",
            "course" => array(
                "Windows Operating Systems Fundamentals, (98-349)",
                "Security Fundamentals (98-367)"
            ),
        ),
    ),
    "project" => array(
        array(
            "name" => "SDF",
            "image" => "sdf.jpg",
            "code" => "sdf",
            "course" => array(
                "Microsoft Azure Fundamentals (AZ-900.AB1)",
                "Microsoft Azure Fundamentals (AZ-900.AB1)",
                "Microsoft Azure AI Fundamentals (AZ-900.AB1)",
                "Microsoft Azure Data Fundamentals (DP-900.AP1)",
                "Microsoft 365 Fundamentals (MS-900.AP1)",
                "Microsoft Power Platform Fundamentals",
                "Microsoft Security, Compliance, and Identity Fundamentals",
            ),
        ),
        array(
            "name" => "WMCA",
            "image" => "wmca.jpg",
            "code" => "wmca",
            "course" => array(
                "Programming in HTML and CSS (98-383)",
                "Microsoft Azure Fundamentals (AZ-900.AB1)",
            ),
        ),
        array(
            "name" => "North of Tyne",
            "image" => "not.jpg",
            "code" => "north-of-tyne",
            "course" => array(
                "Programming in HTML and CSS (98-383)",
            ),
        ),
        array(
            "name" => "TVCA",
            "image" => "tvca.jpg",
            "code" => "tvca",
            "course" => array(
                "Programming in HTML and CSS (98-383)",
            ),
        ),
        array(
            "name" => "Liverpool",
            "image" => "liverpool.jpg",
            "code" => "liverpool",
            "course" => array(
                "Programming in HTML and CSS (98-383)",
                "Azure Fundamentals (AZ-900.AB1)",
            ),
        )

    ),
);

$smarty->assign("productcategory",$productcategory);
$smarty->assign("productlist",$productlist);



$smarty->display( 'index.tpl' );



?>