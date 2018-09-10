<?php
namespace QCubed\ModelGen;
    /**
     * Class QQN
     * Factory methods for generating database nodes at the top of a node chain.
     */
	class QQN {
		/**
		 * @return NodeTest
		 */
		static public function test() {
			return new NodeTest('test', null, null);
		}
	}