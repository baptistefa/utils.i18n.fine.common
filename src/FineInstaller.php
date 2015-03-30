<?php
namespace Mouf\Utils\I18n\Fine\Common;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;
use Mouf\Actions\InstallUtils;

/**
 * Installer for common fine package. This create a defaultTranslationService
 */
class FineInstaller implements PackageInstallerInterface
{

    /**
     * (non-PHPdoc)
     * @see \Mouf\Installer\PackageInstallerInterface::install()
     */
    public static function install(MoufManager $moufManager)
    {
        InstallUtils::getOrCreateInstance("defaultTranslationService", "Mouf\\Utils\\I18n\\Fine\\Common\\FineCascadingTranslator", $moufManager);

        // Let's rewrite the MoufComponents.php file to save the component
        $moufManager->rewriteMouf();
    }
}
