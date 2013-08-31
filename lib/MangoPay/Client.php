<?php

namespace MangoPay;

use Guzzle\Service\Client as GuzzleClient;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Resource\Model;
use Guzzle\Common\Event;
use Guzzle\Common\Collection;

use MangoPay\Plugin\MangoPaySecurityPlugin;
use MangoPay\Exception\ExceptionListener;

/**
 * Class: Client
 *
 * @see GuzzleClient
 * @method Model CreateABeneficiary(array $args = array()) {@command CreateABeneficiary}
 * @method Model FetchABeneficiary(array $args = array()) {@command FetchABeneficiary}
 * @method Model CreateAContribution(array $args = array()) {@command CreateAContribution}
 * @method Model FetchAContribution(array $args = array()) {@command FetchAContribution}
 * @method Model CreateAPaymentCard(array $args = array()) {@command CreateAPaymentCard}
 * @method Model FetchAPaymentCard(array $args = array()) {@command FetchAPaymentCard}
 * @method Model FetchAListOfUsersPaymentCards(array $args = array()) {@command FetchAListOfUsersPaymentCards}
 * @method Model DeleteAPaymentCard(array $args = array()) {@command DeleteAPaymentCard}
 * @method Model CreateAUser(array $args = array()) {@command CreateAUser}
 * @method Model FetchAUser(array $args = array()) {@command FetchAUser}
 * @method Model UpdateUserInfo(array $args = array()) {@command UpdateUserInfo}
 * @method Model CreateAWallet(array $args = array()) {@command CreateAWallet}
 * @method Model FetchAWallet(array $args = array()) {@command FetchAWallet}
 * @method Model ModifyAWallet(array $args = array()) {@command ModifyAWallet}
 * @method Model ListUsersOfAWallet(array $args = array()) {@command ListUsersOfAWallet}
 * @method Model ListWalletsFromAUser(array $args = array()) {@command ListWalletsFromAUser}
 * @method Model CreateAnImmediateContribution(array $args = array()) {@command CreateAnImmediateContribution}
 * @method Model FetchAnImmediateContribution(array $args = array()) {@command FetchAnImmediateContribution}
 * @method Model CreateAContributionByWithdrawal(array $args = array()) {@command CreateAContributionByWithdrawal}
 * @method Model FetchAContributionByWithdrawal(array $args = array()) {@command FetchAContributionByWithdrawal}
 * @method Model CreateAWithdrawal(array $args = array()) {@command CreateAWithdrawal}
 * @method Model FetchAWithdrawal(array $args = array()) {@command FetchAWithdrawal}
 * @method Model CreateARecurrentContribution(array $args = array()) {@command CreateARecurrentContribution}
 * @method Model FetchARecurrentContribution(array $args = array()) {@command FetchARecurrentContribution}
 * @method Model UpdateARecurrentContribution(array $args = array()) {@command UpdateARecurrentContribution}
 * @method Model FetchTheListOfPaymentExecutions(array $args = array()) {@command FetchTheListOfPaymentExecutions}
 * @method Model CreateATransfer(array $args = array()) {@command CreateATransfer}
 * @method Model FetchATransfer(array $args = array()) {@command FetchATransfer}
 * @method Model CreateATransferRefund(array $args = array()) {@command CreateATransferRefund}
 * @method Model FetchATransferRefund(array $args = array()) {@command FetchATransferRefund}
 * @method Model CreateARefund(array $args = array()) {@command CreateARefund}
 * @method Model FetchARefund(array $args = array()) {@command FetchARefund}
 * @method Model FetchWalletOperations(array $args = array()) {@command FetchWalletOperations}
 * @method Model FetchUserOperations(array $args = array()) {@command FetchUserOperations}
 * @method Model FetchPersonalAccountOperations(array $args = array()) {@command FetchPersonalAccountOperations}
 * @method Model FetchAnOperation(array $args = array()) {@command FetchAnOperation}
 * @method Model CreateUserStrongAuthRequest(array $args = array()) {@command CreateUserStrongAuthRequest}
 * @method Model FetchAUserStrongAuthentication(array $args = array()) {@command FetchAUserStrongAuthentication}
 * @method Model UpdateAUserStrongAuthentication(array $args = array()) {@command UpdateAUserStrongAuthentication}
 * @method Model CreateABeneficiaryStrongAuthRequest(array $args = array()) {@command CreateABeneficiaryStrongAuthRequest}
 * @method Model FetchABeneficiaryStrongAuthentication(array $args = array()) {@command FetchABeneficiaryStrongAuthentication}
 * @method Model UpdateABeneficiaryStrongAuthentication(array $args = array()) {@command UpdateABeneficiaryStrongAuthentication}
 * @method Model GetAllPendingStrongAuthentications(array $args = array()) {@command GetAllPendingStrongAuthentications}
 */
class Client extends GuzzleClient
{
    private $partnerId;
    private $version;

    /**
     * factory
     *
     * @param array $config
     */
    public static function factory($config = array()) {

        // Provide a hash of default client configuration options
        $default = array(
            'version' => 'v1',
            'redirect.disable' => true,
            'curl.options'     => array(
                'CURLOPT_SSL_VERIFYHOST' => false,
                'CURLOPT_SSL_VERIFYPEER' => false,
            )
        );

        // The following values are required when creating the client
        $required = array(
            'url',
            'version',
            'partner_id',
            'private_key_path',
            'private_key_path'
        );

         // Merge in default settings and validate the config
        $config = Collection::fromConfig($config, $default, $required);

        $baseUrl = sprintf('%s/%s/partner/%s/', $config['url'], $config['version'], $config['partner_id']);

        $client = new Client($baseUrl, $config);
        $description = ServiceDescription::factory(__DIR__ . '/Resources/api.json');
        $client->setDescription($description);

        $securityPlugin = new MangoPaySecurityPlugin($config['private_key_path'], $config['private_key_path']);
        $client->addSubscriber($securityPlugin);
        $client->addSubscriber(new ExceptionListener());

        return $client;
    }
}


