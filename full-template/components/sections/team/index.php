<?php
/**
 * Team Sections Index
 * Zentrale Datei für alle Team-Komponenten
 */

// Lade alle Team-Komponenten
require_once 'SimpleTeamGrid.php';
require_once 'ProfessionalTeamLayout.php';
require_once 'DetailedTeamProfiles.php';
require_once 'CompanyIntegratedTeams.php';

/**
 * Team-Registry für einfache Verwendung
 */
class TeamRegistry {
    
    public static $components = [
        // Simple Team Grid (6 Varianten)
        'SimpleTeamGrid' => [
            'function' => 'SimpleTeamGrid',
            'variants' => ['basic-four', 'executive-roles', 'extended-team', 'large-team', 'detailed-team', 'grid-with-cta'],
            'description' => 'Einfache Grid-Layouts für Team-Darstellung'
        ],
        
        // Professional Team Layout (4 Varianten)
        'ProfessionalTeamLayout' => [
            'function' => 'ProfessionalTeamLayout',
            'variants' => ['executive-showcase', 'clean-layout', 'wide-container', 'standard-layout'],
            'description' => 'Professionelle Team-Layouts'
        ],
        
        // Detailed Team Profiles (4 Varianten)
        'DetailedTeamProfiles' => [
            'function' => 'DetailedTeamProfiles',
            'variants' => ['role-first', 'comprehensive-bios', 'varied-descriptions', 'large-team-grid'],
            'description' => 'Detaillierte Team-Profile'
        ],
        
        // Company Integrated Teams (4 Varianten)
        'CompanyIntegratedTeams' => [
            'function' => 'CompanyIntegratedTeams',
            'variants' => ['large-team-display', 'company-branded', 'executive-focus', 'leadership-profile'],
            'description' => 'Unternehmens-integrierte Team-Darstellungen'
        ]
    ];
    
    /**
     * Rendert eine Team-Komponente
     */
    public static function render($componentName, $variant = 'default', $options = []) {
        if (isset(self::$components[$componentName])) {
            $component = self::$components[$componentName];
            $function = $component['function'];
            
            if (function_exists($function)) {
                return $function($variant, $options);
            } else {
                error_log("Team function not found: $function");
            }
        } else {
            error_log("Team component not found: $componentName");
        }
    }
    
    /**
     * Holt alle verfügbaren Komponenten
     */
    public static function getAllComponents() {
        return self::$components;
    }
    
    /**
     * Holt alle Varianten einer Komponente
     */
    public static function getVariants($componentName) {
        return self::$components[$componentName]['variants'] ?? [];
    }
    
    /**
     * Prüft ob eine Komponente existiert
     */
    public static function exists($componentName) {
        return isset(self::$components[$componentName]);
    }
}

// Hilfsfunktionen für alle Team-Komponenten
function renderSimpleTeamGrid($variant = 'basic-four', $options = []) {
    return TeamRegistry::render('SimpleTeamGrid', $variant, $options);
}

function renderProfessionalTeamLayout($variant = 'executive-showcase', $options = []) {
    return TeamRegistry::render('ProfessionalTeamLayout', $variant, $options);
}

function renderDetailedTeamProfiles($variant = 'role-first', $options = []) {
    return TeamRegistry::render('DetailedTeamProfiles', $variant, $options);
}

function renderCompanyIntegratedTeams($variant = 'large-team-display', $options = []) {
    return TeamRegistry::render('CompanyIntegratedTeams', $variant, $options);
}

/**
 * Hilfsfunktion für einfache Team-Verwendung
 */
function renderTeam($componentName, $variant = 'default', $options = []) {
    return TeamRegistry::render($componentName, $variant, $options);
}
?>
