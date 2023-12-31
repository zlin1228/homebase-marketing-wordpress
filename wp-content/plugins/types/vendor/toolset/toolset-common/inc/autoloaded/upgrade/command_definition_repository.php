<?php

/**
 * Stores upgrade command definitions.
 *
 * Had to be extracted from Toolset_Upgrade_Controller for testability reasons.
 *
 * @since 2.5.4
 */
class Toolset_Upgrade_Command_Definition_Repository {

	/**
	 * Get commands executed when the database version is 0.
	 *
	 * @return Toolset_Upgrade_Command_Definition[]
	 * @since 3.6.0
	 */
	public function get_setup_commands() {
		$setup_commands = array(
			$this->definition(
				'\OTGS\Toolset\Common\Upgrade\Command\Setup\FontAwesomeVersion',
				PHP_INT_MAX
			),
		);

		return $setup_commands;
	}

	public function get_commands() {

		$upgrade_commands = array(
			$this->definition(
				'Toolset_Upgrade_Command_Delete_Obsolete_Upgrade_Options',
				1 ),
			$this->definition(
				'Toolset_Upgrade_Command_M2M_V1_Database_Structure_Upgrade',
				2 ),
			$this->definition(
				'Toolset_Upgrade_Command_M2M_V2_Database_Structure_Upgrade',
				3 ),
			$this->definition(
				'\OTGS\Toolset\Common\Upgrade\Command\AddRelationshipTableColumnAutodeleteIntermediaryPosts',
				4
			),
			$this->definition(
				'\OTGS\Toolset\Common\Upgrade\Command\AlterToolsetPostGuidIdNullableId',
				5
			),
			$this->definition(
				'\OTGS\Toolset\Common\Upgrade\Command\FontAwesomeVersion',
				6
			),
		);

		return $upgrade_commands;
	}


	/**
	 * @param string $command_class_name
	 * @param int $upgrade_version
	 *
	 * @return Toolset_Upgrade_Command_Definition
	 */
	private function definition( $command_class_name, $upgrade_version ) {
		// TODO consider using DIC.
		return new Toolset_Upgrade_Command_Definition(
			$command_class_name, $upgrade_version
		);
	}

}
