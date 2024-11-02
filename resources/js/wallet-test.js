import { getAddress } from 'sats-connect';

const connectButton = document.getElementById('connect-wallet');
const addressDisplay = document.getElementById('wallet-address');

const connectWallet = async () => {
    try {
        const getAddressOptions = {
            payload: {
                purposes: ['ordinals', 'payment'],
                message: 'Address for receiving Bitcoin and Ordinals',
                network: {
                    type: 'Mainnet'
                },
            },
            onFinish: (response) => {
                const ordinalAddress = response.addresses[0].address;
                addressDisplay.textContent = `Connected: ${ordinalAddress}`;
                addressDisplay.classList.remove('hidden');
                connectButton.textContent = 'Wallet Connected';
                connectButton.disabled = true;
            },
            onCancel: () => {
                alert('User canceled the request');
            },
        };

        await getAddress(getAddressOptions);
    } catch (error) {
        console.error('Error connecting wallet:', error);
        alert('Error connecting wallet. Make sure you have a compatible wallet installed.');
    }
};

if (connectButton) {
    connectButton.addEventListener('click', connectWallet);
}